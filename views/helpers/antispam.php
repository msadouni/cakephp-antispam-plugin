<?php
App::import('Helper', 'Html');
App::import('Helper', 'Form');
App::import('Component', 'Antispam.Antispam');

class AntispamHelper extends FormHelper {

   function fields() {
       $antispam =& new AntispamComponent();
       $htmlHelper =& new HtmlHelper();
       $content = '';
       foreach ($antispam->fields as $f) {
           $content .= $this->input(".$f", array(
               'type' => 'text',
               'tabindex' => 999,
               'autocomplete' => 'off'
           ));
       }
       return $htmlHelper->tag('div', $content, array('class' => 'n-a-s'));
   }
}

