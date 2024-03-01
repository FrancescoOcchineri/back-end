<?php

namespace FormGenerator {

    class Form {
        protected $method;
        protected $action;

        function __construct($method, $action) {
            $this->method = $method;
            $this->action = $action;
        }

        public function getForm() {
            return '<form method="' . $this->method . '" action="' . $this->action . '" ></form>';
        }
    }

    class Fields {
        protected $type;
        protected $name;
        protected $placeholder;
        protected $label;
        protected $class;

        function __construct($type, $name, $placeholder, $label, $class) {
            $this->type = $type;
            $this->name = $name;
            $this->placeholder = $placeholder;
            $this->label = $label;
            $this->class = $class;
        }

        public function getLabel() {
            return '<label class="' . $this->class . '">' . $this->label . '</label>';
        }

        public function getInput() {
            return '<input type="' . $this->type . '" name="' . $this->name . '" placeholder="' . $this->placeholder . '" class="' . $this->class . '">';
        }
    }
}


