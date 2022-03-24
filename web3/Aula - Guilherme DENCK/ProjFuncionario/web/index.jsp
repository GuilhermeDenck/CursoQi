<%-- 
    Document   : index
    Created on : 29/06/2020, 16:51:45
    Author     : guidenck
--%>
<%@page language="java"%>
<%@page import="Model.Funcionario"%>
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Cadastro</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
       
    </head>
    
    <body>
        
        <section class="container">
            <div class="">
           <h2 style="text-align: center">
               <%
                   
                Funcionario f1 = new Funcionario();
                
                        
                f1.setNome(request.getParameter("nome"));
                f1.setCargo(request.getParameter("tipoCargo"));
                f1.setValorHora(request.getParameter("valorhora"));
                f1.setQuantHoras(request.getParameter("quantidadehoras"));
                f1.setHorasExtras50(request.getParameter("valorextras50"));
                f1.setHorasExtras100(request.getParameter("valorextras100"));
                f1.setDependentes(request.getParameter("dependentes"));
                f1.setTipoInsalubre(request.getParameter("tipoInsalubre"));
                
                
                out.print("Salário bruto: "+f1.calcularSalarioBruto());
               %>
               <br>
               
               <%
                   
                 out.print("Salário familia: "+f1.calcularSalarioFamilia());  
                   
                   
               %>
               <br>
               
               <%
                 out.print("Insalubridade: "+f1.calcularInsalubridade());  
               %>
               <br>
               
               <%
                 out.print("INSS: "+f1.calcularINSS());   
               %>
               <br>
               
               <%
                 out.print("Horas extras 50%: "+f1.calcularValorExtra50());
               %>
               <br
               <%
                 out.print("Horas extras 100%: "+f1.calcularValorExtra100());  
               %>
               <br>
               <%
                 out.print("Total de horas extras: "+f1.calcularTotalExtra());  
               %>
               <br>
               <%
                 out.print("Salário liquido: "+f1.calcularLiquido());  
               %>    
               
           </h2>
            </div>    
        </section>
               
               
               
               
    </body>
</html>
