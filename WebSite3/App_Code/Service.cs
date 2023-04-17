using System;
using System.Collections.Generic;
using System.Data;
using System.Data.SqlClient;
using System.Linq;
using System.Web;
using System.Web.Services;

[WebService(Namespace = "http://tempuri.org/")]
[WebServiceBinding(ConformsTo = WsiProfiles.BasicProfile1_1)]
// Para permitir que se llame a este servicio web desde un script, usando ASP.NET AJAX, quite la marca de comentario de la línea siguiente. 
// [System.Web.Script.Services.ScriptService]

public class Service : System.Web.Services.WebService
{
    public Service () {

        //Elimine la marca de comentario de la línea siguiente si utiliza los componentes diseñados 
        //InitializeComponent(); 
    }

    [WebMethod]
    public string HelloWorld() {
        return "Hola a todos";
    }
    [WebMethod]
    public DataSet GetData()
    {
        SqlConnection con = new SqlConnection("Database=MIBASEMINOMBRE;Server=localhost;user=user_inf_324;password=Password123");
        SqlDataAdapter da = new SqlDataAdapter("SELECT ci AS 'CI', nombre_completo AS 'Nombre Completo', fecha_nacimiento AS 'Fecha Nacimiento', telefono AS 'Telefono'," +
	"(CASE "+
		" WHEN departamento LIKE '01' THEN 'Chuquisaca' "+
		" WHEN departamento LIKE '02' THEN 'La Paz' "+
		" WHEN departamento LIKE '03' THEN 'Cochabamba' "+
		" WHEN departamento LIKE '04' THEN 'Oruro' "+
		" WHEN departamento LIKE '05' THEN 'Potosi' "+
		" WHEN departamento LIKE '06' THEN 'Tarija' "+
		" WHEN departamento LIKE '07' THEN 'Santa Cruz'"+
		" WHEN departamento LIKE '08' THEN 'Beni' "+
		" WHEN departamento LIKE '09' THEN 'Pando' "+
	"END) AS Departamento FROM PERSONA", con);

        DataSet ds = new DataSet();
        da.Fill(ds);
        con.Close();
        return ds;

    }

    [WebMethod]
    public Boolean nuevo_registro(string ci, string nombre_completo, DateTime fecha_nacimiento, string telefono, string departamento)
    {
        SqlConnection con = new SqlConnection("Database=MIBASEMINOMBRE;Server=localhost;user=user_inf_324;password=Password123");

        SqlDataAdapter adapter = new SqlDataAdapter();

        SqlCommand command = new SqlCommand(
            "INSERT INTO PERSONA (ci, nombre_completo, fecha_nacimiento, telefono, departamento) " +
            "VALUES (@ci, @nombre_completo, @fecha_nacimiento, @telefono, @departamento)", con);

        // Add the parameters for the InsertCommand.
        command.Parameters.Add("@ci", ci);
        command.Parameters.Add("@nombre_completo", nombre_completo);
        command.Parameters.Add("@fecha_nacimiento", fecha_nacimiento);
        command.Parameters.Add("@telefono", telefono);
        command.Parameters.Add("@departamento", departamento);

        con.Open();
        adapter.InsertCommand = command;
        command.ExecuteNonQuery();

        con.Close();

        return true;
    }

    [WebMethod]
    public Boolean actualizar_registro(string ci, string nombre_completo, string telefono, string departamento)
    {
        SqlConnection con = new SqlConnection("Database=MIBASEMINOMBRE;Server=localhost;user=user_inf_324;password=Password123");

        SqlDataAdapter adapter = new SqlDataAdapter();
                
        SqlCommand command = new SqlCommand(
            "UPDATE PERSONA SET nombre_completo = @nombre_completo, telefono = @telefono, departamento = @departamento " +
            "WHERE ci = @ci", con);

        
        command.Parameters.Add("@nombre_completo", nombre_completo);
        command.Parameters.Add("@telefono", telefono);
        command.Parameters.Add("@departamento", departamento);

        SqlParameter parameter = command.Parameters.Add("@ci", ci);
        parameter.SourceVersion = DataRowVersion.Original;

        con.Open();
        adapter.UpdateCommand = command;
        command.ExecuteNonQuery();

        con.Close();

        return true;
    }
    [WebMethod]
    public Boolean eliminar_registro(string ci)
    {
        SqlConnection con = new SqlConnection("Database=MIBASEMINOMBRE;Server=localhost;user=user_inf_324;password=Password123");

        SqlDataAdapter adapter = new SqlDataAdapter();

        SqlCommand command = new SqlCommand("DELETE FROM PERSONA WHERE ci = @ci", con);

        SqlParameter parameter = command.Parameters.Add("@ci", ci);
        parameter.SourceVersion = DataRowVersion.Original;

        con.Open();
        adapter.DeleteCommand = command;
        command.ExecuteNonQuery();

        con.Close();

        return true;
    }

}