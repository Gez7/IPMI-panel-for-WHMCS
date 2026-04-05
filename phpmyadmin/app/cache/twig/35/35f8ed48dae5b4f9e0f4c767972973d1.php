<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* login/twofactor.twig */
class __TwigTemplate_eda1289eff4cbc15d052bfcff6a86037 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<form method=\"post\" class=\"disableAjax\">
  ";
        // line 2
        yield PhpMyAdmin\Url::getHiddenInputs();
        yield "

  <div class=\"card\">
    <div class=\"card-body\">
      ";
        // line 6
        yield (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })());
        yield "
    </div>
    <div class=\"card-footer\">
      ";
        // line 9
        if ((($tmp = (isset($context["show_submit"]) || array_key_exists("show_submit", $context) ? $context["show_submit"] : (function () { throw new RuntimeError('Variable "show_submit" does not exist.', 9, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 10
            yield "        <input class=\"btn btn-primary\" type=\"submit\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Verify"), "html", null, true);
            yield "\">
      ";
        }
        // line 12
        yield "    </div>
  </div>
</form>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "login/twofactor.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  66 => 12,  60 => 10,  58 => 9,  52 => 6,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<form method=\"post\" class=\"disableAjax\">
  {{ get_hidden_inputs() }}

  <div class=\"card\">
    <div class=\"card-body\">
      {{ form|raw }}
    </div>
    <div class=\"card-footer\">
      {% if show_submit %}
        <input class=\"btn btn-primary\" type=\"submit\" value=\"{{ t('Verify') }}\">
      {% endif %}
    </div>
  </div>
</form>
", "login/twofactor.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/login/twofactor.twig");
    }
}
