<?php

class ContactController {
    
    public function index() {

        
        $contacts = App::get('database')->selectAll('contacts');

        return view('index', compact('contacts'));
    }

    public function store() {

        App::get('database')->insert('contacts', [
            'name' => $_POST['name'],
            'email' => 'arthur.falcao@zage.com.br',
            'fone' => '12312889'
        ]);

        return redirect('');        
    }
}