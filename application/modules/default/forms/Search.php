<?php

/**
 * Default Search Form
 * *
 * @author 			Eddie Jaoude
 * @category   		Real Browser
 * @package 		Default Module
 *
 */
class Default_Form_Search extends Zend_Form {

    public function __construct($options = null) {
        parent::__construct($options);
        $this->setName('Search')
                ->setMethod('post')
                ->setAttrib('class', 'box')
                ->setAction('/');

        # keyword
        $keyword = new Zend_Form_Element_Text('keyword');
        $keyword->setLabel('Keyword')
                ->setRequired(true)
                ->addFilter('StripTags')
                ->addFilter('StringTrim')
                ->addFilter('StringToLower')
                ->addValidator('NotEmpty');

        # language
        $language = new Zend_Form_Element_Select('language');
        $language->setLabel('language');
        $language->setMultiOptions(
                array(
                    'as3' => 'ActionScript',
                    'c' => 'C',
                    'csharp' => 'C#',
                    'cpp' => 'C++',
                    'css' => 'CSS',
                    'common-lisp' => 'Common Lisp',
                    'diff' => 'Diff',
                    'erlang' => 'Erlang',
                    'html' => 'HTML',
                    'haskell' => 'Haskell',
                    'java' => 'Java',
                    'javascript' => 'JavaScript',
                    'lua' => 'Lua',
                    'objective-c' => 'Objective-C',
                    'php' => 'PHP',
                    'perl' => 'Perl',
                    'python' => 'Python',
                    'ruby' => 'Ruby',
                    'sql' => 'SQL',
                    'scala' => 'Scala',
                    'scheme' => 'Scheme',
                    'tex' => 'TeX',
                    'xml' => 'XML',
                    'aspx-vb' => 'ASP',
                    'ada' => 'Ada',
                    'applescript' => 'AppleScript',
                    'arc' => 'Arc',
                    'nasm' => 'Assembly',
                    'bat' => 'Batchfile',
                    'befunge' => 'Befunge',
                    'blitzmax' => 'BlitzMax',
                    'boo' => 'Boo',
                    'brainfuck' => 'Brainfuck',
                    'c-objdump' => 'C-ObjDump',
                    'clojure' => 'Clojure',
                    'coffeescript' => 'CoffeeScript',
                    'cfm' => 'ColdFusion',
                    'cpp-objdump' => 'Cpp-ObjDump',
                    'cucumber' => 'Cucumber',
                    'cython' => 'Cython',
                    'd' => 'D',
                    'd-objdump' => 'D-ObjDump',
                    'dpatch' => 'Darcs Patch',
                    'delphi' => 'Delphi',
                    'dylan' => 'Dylan',
                    'eiffel' => 'Eiffel',
                    'fortran' => 'FORTRAN',
                    'factor' => 'Factor',
                    'gas' => 'GAS',
                    'genshi' => 'Genshi',
                    'bash' => 'Gentoo Eclass',
                    'pot' => 'Gettext Catalog',
                    'go' => 'Go',
                    'groff' => 'Groff',
                    'html+django' => 'HTML+Django',
                    'html+erb' => 'HTML+ERB',
                    'html+php' => 'HTML+PHP',
                    'haxe' => 'HaXe',
                    'haml' => 'Haml',
                    'ini' => 'INI',
                    'irc' => 'IRC log',
                    'io' => 'Io',
                    'jsp' => 'Java Server Pages',
                    'llvm' => 'LLVM',
                    'lhs' => 'Literate Haskell',
                    'makefile' => 'Makefile',
                    'mako' => 'Mako',
                    'markdown' => 'Markdown',
                    'matlab' => 'Matlab',
                    'max/msp' => 'Max/MSP',
                    'moocode' => 'Moocode',
                    'myghty' => 'Myghty',
                    'numpy' => 'NumPy',
                    'ocaml' => 'OCaml',
                    'objdump' => 'ObjDump',
                    'objective-j' => 'Objective-J',
                    'pir' => 'Parrot Internal Representation',
                    'pure-data' => 'Pure Data',
                    'pytb' => 'Python traceback',
                    'r' => 'R',
                    'rhtml' => 'RHTML',
                    'racket' => 'Racket',
                    'raw' => 'Raw token data',
                    'rebol' => 'Rebol',
                    'redcode' => 'Redcode',
                    'sass' => 'Sass',
                    'self' => 'Self',
                    'smalltalk' => 'Smalltalk',
                    'smarty' => 'Smarty',
                    'supercollider' => 'SuperCollider',
                    'tcl' => 'Tcl',
                    'tcsh' => 'Tcsh',
                    'text' => 'Text',
                    'textile' => 'Textile',
                    'vhdl' => 'VHDL',
                    'vala' => 'Vala',
                    'verilog' => 'Verilog',
                    'vim' => 'VimL',
                    'visual-basic' => 'Visual Basic',
                    'xquery' => 'XQuery',
                    'yaml' => 'YAML',
                    'mupad' => 'mupad',
                    'ooc' => 'ooc',
                    'rst' => 'reStructuredText',
                )
        );

        # sort
        $sort = new Zend_Form_Element_Select('sort_by');
        $sort->setLabel('Sort By');
        $sort->setMultiOptions(
                array(
                    'id' => 'GitHub Natural',
                    'name' => 'Project',
                    'owner' => 'Owner',
                    'pushed_at' => 'Activity',
                    'created_at' => 'Created',
                    'watchers' => 'Watchers',
                    'forks' => 'Forks',
                    'issues' => 'Issues',
                    'score' => 'GitHub Score',
                    )
                );

        # order
        $order = new Zend_Form_Element_Select('order');
        $order->setLabel('Order');
        $order->setMultiOptions(
                array(
                    'DESC' => 'Desc',
                    'ASC' => 'ASC'
                    )
                );

        # Submit
        $submit = new Zend_Form_Element_Submit('search');

        # Create
        $this->addElements(array($keyword, $language, $sort, $submit));
    }

}

?>