<?php

/* traitable.twig */
class __TwigTemplate_121df410c96ee16ccddd9c869f4f71e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('title', $context, $blocks);
    }

    public function block_title($context, array $blocks = array())
    {
        echo "foo";
    }

    public function getTemplateName()
    {
        return "traitable.twig";
    }

    public function getDebugInfo()
    {
        return array (  44 => 4,  21 => 1,  70 => 12,  67 => 11,  62 => 10,  57 => 6,  54 => 5,  43 => 14,  40 => 11,  34 => 2,  32 => 5,  28 => 4,  23 => 1,  48 => 4,  42 => 5,  38 => 3,  36 => 2,  19 => 1,  20 => 1,);
    }
}
