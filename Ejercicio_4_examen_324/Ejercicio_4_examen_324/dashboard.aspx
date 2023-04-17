<%@ Page Language="C#" AutoEventWireup="true" CodeFile="dashboard.aspx.cs" Inherits="dashboard" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
   

    <title></title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">FCPN - INF 324</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="home.aspx">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.aspx">Ingresar</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="dashboard.aspx">Visualizar por departamento la media de notas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contactanos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Quienes Somos?</a>
      </li>
        <li class="nav-item">
            <a class="nav-link" href="#"> <asp:Label ID="whoami" runat="server" Text=""></asp:Label></a>
        </li>
    </ul>
  </div>
</nav>

    <form id="form1" runat="server">
       
    <asp:SqlDataSource ID="SqlDataSource1" runat="server" ConnectionString="<%$ ConnectionStrings:MIBASEMINOMBREConnectionString %>" OnSelecting="SqlDataSource1_Selecting" SelectCommand="SELECT ISNULL([01], 0) as 'Chuquisaca', ISNULL([02], 0) as 'La Paz', ISNULL([03], 0) as 'Cochabamba', ISNULL([04], 0) as 'Oruro', ISNULL([05], 0) as 'Potosi', ISNULL([06], 0) as 'Tarija', ISNULL([07], 0) as 'Santa Cruz', ISNULL([08], 0) as 'Beni', ISNULL([09], 0) as 'Pando'
FROM (
    SELECT xs.departamento as departamento, AVG(xd.notafinal) as promedio
	FROM INSCRIPCION xd, PERSONA xs WHERE xd.ci_estudiante LIKE xs.ci
	GROUP BY departamento
) AS datos
PIVOT (
    SUM(promedio)
    FOR departamento IN ([01], [02], [03], [04], [05], [06], [07], [08], [09])
) AS pivot_table"></asp:SqlDataSource>
        
        <div>

            <asp:GridView ID="GridView1" runat="server" AutoGenerateColumns="False" DataSourceID="SqlDataSource1" BorderStyle="Solid" OnSelectedIndexChanged="GridView1_SelectedIndexChanged" CssClass="table table-striped">
                <AlternatingRowStyle BorderColor="Black" />
                <Columns>
                    <asp:BoundField DataField="Chuquisaca" HeaderText="Chuquisaca" ReadOnly="True" SortExpression="Chuquisaca" />
                    <asp:BoundField DataField="La Paz" HeaderText="La Paz" ReadOnly="True" SortExpression="La Paz" />
                    <asp:BoundField DataField="Cochabamba" HeaderText="Cochabamba" ReadOnly="True" SortExpression="Cochabamba" />
                    <asp:BoundField DataField="Oruro" HeaderText="Oruro" ReadOnly="True" SortExpression="Oruro" />
                    <asp:BoundField DataField="Potosi" HeaderText="Potosi" ReadOnly="True" SortExpression="Potosi" />
                    <asp:BoundField DataField="Tarija" HeaderText="Tarija" ReadOnly="True" SortExpression="Tarija" />
                    <asp:BoundField DataField="Santa Cruz" HeaderText="Santa Cruz" ReadOnly="True" SortExpression="Santa Cruz" />
                    <asp:BoundField DataField="Beni" HeaderText="Beni" ReadOnly="True" SortExpression="Beni" />
                    <asp:BoundField DataField="Pando" HeaderText="Pando" ReadOnly="True" SortExpression="Pando" />
                </Columns>              
            </asp:GridView>

        </div>
    </form>
    </body>
</html>
