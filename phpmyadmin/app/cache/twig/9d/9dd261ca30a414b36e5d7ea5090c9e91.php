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

/* table/start_and_number_of_rows_fieldset.twig */
class __TwigTemplate_a8f884ca51bb645fada7b050b4348612 extends Template
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
        yield "<fieldset class=\"row g-3 align-items-center\">
  <div class=\"col-auto\">
    <label class=\"col-form-label\" for=\"startRowInput\">";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Start row:"), "html", null, true);
        yield "</label>
  </div>
  <div class=\"col-auto\">
    <input class=\"form-control\" id=\"startRowInput\" type=\"number\" name=\"pos\" min=\"0\" value=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pos"]) || array_key_exists("pos", $context) ? $context["pos"] : (function () { throw new RuntimeError('Variable "pos" does not exist.', 6, $this->source); })()), "html", null, true);
        yield "\"";
        if (((isset($context["unlim_num_rows"]) || array_key_exists("unlim_num_rows", $context) ? $context["unlim_num_rows"] : (function () { throw new RuntimeError('Variable "unlim_num_rows" does not exist.', 6, $this->source); })()) > 0)) {
            yield " max=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["unlim_num_rows"]) || array_key_exists("unlim_num_rows", $context) ? $context["unlim_num_rows"] : (function () { throw new RuntimeError('Variable "unlim_num_rows" does not exist.', 6, $this->source); })()) - 1), "html", null, true);
            yield "\"";
        }
        yield " required>
  </div>
  <div class=\"col-auto\">
    <label class=\"col-form-label\" for=\"maxRowsInput\">";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Number of rows:"), "html", null, true);
        yield "</label>
  </div>
  <div class=\"col-auto\">
    <input class=\"form-control\" id=\"maxRowsInput\" type=\"number\" name=\"session_max_rows\" min=\"1\" value=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new RuntimeError('Variable "rows" does not exist.', 12, $this->source); })()), "html", null, true);
        yield "\" required>
  </div>
  <div class=\"col-auto\">
    <input class=\"btn btn-primary\" type=\"submit\" name=\"submit\" value=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Go"), "html", null, true);
        yield "\">
  </div>
  <input type=\"hidden\" name=\"sql_query\" value=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["sql_query"]) || array_key_exists("sql_query", $context) ? $context["sql_query"] : (function () { throw new RuntimeError('Variable "sql_query" does not exist.', 17, $this->source); })()), "html", null, true);
        yield "\">
  <input type=\"hidden\" name=\"unlim_num_rows\" value=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["unlim_num_rows"]) || array_key_exists("unlim_num_rows", $context) ? $context["unlim_num_rows"] : (function () { throw new RuntimeError('Variable "unlim_num_rows" does not exist.', 18, $this->source); })()), "html", null, true);
        yield "\">
</fieldset>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "table/start_and_number_of_rows_fieldset.twig";
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
        return array (  85 => 18,  81 => 17,  76 => 15,  70 => 12,  64 => 9,  52 => 6,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<fieldset class=\"row g-3 align-items-center\">
  <div class=\"col-auto\">
    <label class=\"col-form-label\" for=\"startRowInput\">{{ t('Start row:') }}</label>
  </div>
  <div class=\"col-auto\">
    <input class=\"form-control\" id=\"startRowInput\" type=\"number\" name=\"pos\" min=\"0\" value=\"{{ pos }}\"{% if unlim_num_rows > 0 %} max=\"{{ unlim_num_rows - 1 }}\"{% endif %} required>
  </div>
  <div class=\"col-auto\">
    <label class=\"col-form-label\" for=\"maxRowsInput\">{{ t('Number of rows:') }}</label>
  </div>
  <div class=\"col-auto\">
    <input class=\"form-control\" id=\"maxRowsInput\" type=\"number\" name=\"session_max_rows\" min=\"1\" value=\"{{ rows }}\" required>
  </div>
  <div class=\"col-auto\">
    <input class=\"btn btn-primary\" type=\"submit\" name=\"submit\" value=\"{{ t('Go') }}\">
  </div>
  <input type=\"hidden\" name=\"sql_query\" value=\"{{ sql_query }}\">
  <input type=\"hidden\" name=\"unlim_num_rows\" value=\"{{ unlim_num_rows }}\">
</fieldset>
", "table/start_and_number_of_rows_fieldset.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/table/start_and_number_of_rows_fieldset.twig");
    }
}
