using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Data.SqlClient;
using System.Configuration;
using System.Data;
using System.Text;

public partial class login : System.Web.UI.Page
{
    SqlConnection con = new SqlConnection("Database=MIBASEMINOMBRE;Server=localhost;user=user_inf_324;password=password123");
    protected void Page_Load(object sender, EventArgs e)
    {

    }



    protected void login_button_Click(object sender, EventArgs e)
    {
        con.Open();
        string query = "SELECT count(*), rol FROM USUARIO WHERE [usuario] = @username AND [password] = CONVERT(NVARCHAR(64), HashBytes('MD5', @password), 2) GROUP BY rol";
        SqlCommand checkCmd = new SqlCommand(query, con);
        checkCmd.Parameters.AddWithValue("@username", username.Text.ToString());
        checkCmd.Parameters.AddWithValue("@password", Encoding.UTF8.GetBytes(password.Text.ToString()));
        SqlDataReader read = checkCmd.ExecuteReader();

        if (read.Read() && Convert.ToInt32(read.GetValue(0)) > 0)
        {
            Session["user_id"] = username.Text.ToString();
            Session["rol"] = read.GetValue(1).ToString();
            Response.Redirect("dashboard.aspx");
        }
        else
        {
            errorMsg.Text = "Invalid Username or Password";
            errorMsg.ForeColor = System.Drawing.Color.Red;
        }

        con.Close();
        
    }
}