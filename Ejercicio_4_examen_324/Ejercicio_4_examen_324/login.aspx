<%@ Page Language="C#" AutoEventWireup="true" CodeFile="login.aspx.cs" Inherits="login" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <div class="row">
        <div class="mx-auto col-10 col-md-8 col-lg-6">
            <form id="form1" runat="server">
                <h1>Login Page</h1>
                <asp:Label ID="errorMsg" runat="server" Text=""></asp:Label>
                <div class="form-group">
                    <asp:Label ID="Label1" runat="server" Text="Username" for="exampleInputEmail1"></asp:Label><br>
                    <asp:TextBox ID="username" runat="server" Placeholder="Introduce username" class="form-control"></asp:TextBox><br>
                    <asp:Label ID="Label2" runat="server" Text="Password" ></asp:Label><br>
                    <asp:TextBox ID="password" runat="server" Placeholder="Introduce tu password" class="form-control" type="password"></asp:TextBox><br>
            
                    <asp:Button ID="login_button" runat="server" Text="Aceptar" OnClick="login_button_Click" class="btn btn-primary"/>
                    <input id="Reset1" type="reset" value="Resetear" class="btn btn-secondary"/>
                </div>
            </form>
         </div>
     </div>
</body>
</html>
