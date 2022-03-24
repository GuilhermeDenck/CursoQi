<%-- 
    Document   : index
    Created on : 25 de jun de 2020, 16:31:06
    Author     : guidenck
--%>
<%@page language="java"%>
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Capturando Dados do Formulário</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>
    <body>
        <section class="container"> 
            <h1 class="text-center">Formulário</h1>
            <form method="post" action="index.jsp">
                <div class="form-group">
                    <label> Usuário </label>
                    <input type="text" name="user" class="form-control"> 
                </div>    
                
                <div class="form-group">
                    <label> Senha </label>
                    <input type="password" name="senha" class="form-control">
                </div>    
                <input type="submit" name="envia" value="Enviar" class="btn btn-primary">
            </form>   
            <h2>
                <%
                   String user = request.getParameter("user");
                   String senha = request.getParameter("senha");
                   if(user==null || senha==null){
                %>         
                <span style="color:red">
                <%    
                       out.print("Preencha o formulário");
                %>
                </span>
                <%
                   }else{
                   out.print("Usuário: "+user);
                   out.print(" - Senha:"+senha);
                   }
                   
                %>    
            </h2>
        </section>    
    </body>
</html>
