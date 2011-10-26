This plugin provides a simple antispam for your forms. It adds fields you can
hide with CSS to indicate if a form is submitted by a bot.

Installation
============

- Clone from github : in your `plugins` directory type

    `git clone git://github.com/msadouni/cakephp-antispam-plugin.git antispam`

- Download an archive from github and extract it in `plugins/antispam`

Usage
=====

Add the component and helper in your controller :

    var $components = array('Antispam.Antispam');
    var $helpers = array('Antispam.Antispam');

Add the antispam fields in your view :

    <?php
    echo $this->Form->create('Post');
    echo $this->Antispam->fields();
    echo $this->Form->inputs();
    echo $this->Form->submit();
    echo $this->Form->end();
    ?>

Hide the fields in CSS :

    .n-a-s { position:absolute; left:-9999px; }

Then before saving your data :

    if ($this->Antispam->isSpam($this->data)) {
        // redirect to a success page to trick the bot
        // or send yourself an email
        // or log the spam for further reviewing
        // or do whatever you want
    } else {
        $this->Post->save($this->data);
    }

Thanks
======

[https://github.com/slainer68/novelys_antispam](https://github.com/slainer68/novelys_antispam)

