/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.omeganimes.cadastro;

/**
 *
 * @author luixs
 */
import java.util.List;
import org.springframework.transaction.annotation.Transactional;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

/**
 *
 * @author luixs
 */
@Service
@Transactional
public class CadastroServico {
@Autowired
        private CadastroRepositorio repo;

        public List<Cadastro> listAll() {
        return repo.findAll();
        }

        public void save(Cadastro cadastro) {
        repo.save(cadastro);
        }

        public Cadastro get(long id) {
        return repo.findById(id).get();
        }

        public void delete(long id) {
        repo.deleteById(id);
        }  
}
