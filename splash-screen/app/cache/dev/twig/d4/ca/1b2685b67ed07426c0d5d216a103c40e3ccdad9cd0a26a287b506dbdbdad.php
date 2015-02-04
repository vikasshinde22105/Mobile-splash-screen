<?php

/* SplashSplashBundle:Default:index.html.twig */
class __TwigTemplate_d4ca1b2685b67ed07426c0d5d216a103c40e3ccdad9cd0a26a287b506dbdbdad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"container\">
  <h2>Vendor Mobile Splash Page</h2>
  <form role=\"form\">
    <div class=\"form-group\">
      <label for=\"email\">Email:</label>
      <input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"Enter email\">
    </div>
    <div class=\"form-group\">
      <label for=\"pwd\">Password:</label>
      <input type=\"password\" class=\"form-control\" id=\"pwd\" placeholder=\"Enter password\">
    </div>
    <div class=\"checkbox\">
      <label><input type=\"checkbox\"> Remember me</label>
    </div>
    <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
  </form>
</div>

";
    }

    public function getTemplateName()
    {
        return "SplashSplashBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 5,  36 => 4,  11 => 1,);
    }
}
