/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.omeganimes.cadastro;


import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.servlet.ModelAndView;

@Controller

public class AppController {
@Autowired
private CadastroServico service;

@RequestMapping("/")
public String viewHomePage(Model model) {  
List<Cadastro> listCadastros = service.listAll();
model.addAttribute("listCadastros", listCadastros);

return "index";
}

@RequestMapping("/new")
public String showNewContPage(Model model) {
Cadastro cadastro = new Cadastro();
model.addAttribute("cadastro", cadastro);

return "new_cadastro";
}

@RequestMapping(value = "/save", method = RequestMethod.POST)
public String saveCadastro(@ModelAttribute("contato") Cadastro cadastro) {
service.save(cadastro);

return "redirect:/";
}

@RequestMapping("/edit/{id}")
public ModelAndView showEditCadastroPage(@PathVariable(name = "id") int id)
{

ModelAndView mav = new ModelAndView("edit_cadastro");
Cadastro cadastro = service.get(id);
mav.addObject("cadastro", cadastro);

return mav;
}

@RequestMapping("/delete/{id}")
public String deleteCadastro(@PathVariable(name = "id") int id) {
service.delete(id);
return "redirect:/";
}
}