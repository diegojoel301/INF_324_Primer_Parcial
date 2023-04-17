using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

public partial class dashboard : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {
        if (Session["rol"] != null)
        {
            if (Session["rol"].ToString() != "director")
            {
                
                Response.Redirect("home.aspx");
            }
        }
        else
        {
            Response.Redirect("login.aspx");
        }
        whoami.Text = "Bienvenido " + Session["user_id"] + " con rol " + Session["rol"];

    }



    protected void SqlDataSource1_Selecting(object sender, SqlDataSourceSelectingEventArgs e)
    {

    }

    protected void GridView1_SelectedIndexChanged(object sender, EventArgs e)
    {

    }
}