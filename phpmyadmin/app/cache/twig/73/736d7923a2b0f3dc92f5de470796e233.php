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

/* table/insert/continue_insertion_form.twig */
class __TwigTemplate_b6b60e713ab17bd88c10b862294e84a8 extends Template
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
        yield "<form id=\"continueForm\" method=\"post\" action=\"";
        yield PhpMyAdmin\Url::getFromRoute("/table/change");
        yield "\" name=\"continueForm\" class=\"row g-3\">
  ";
        // line 2
        yield PhpMyAdmin\Url::getHiddenInputs((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 2, $this->source); })()), (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 2, $this->source); })()));
        yield "
  <input type=\"hidden\" name=\"goto\" value=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["goto"]) || array_key_exists("goto", $context) ? $context["goto"] : (function () { throw new RuntimeError('Variable "goto" does not exist.', 3, $this->source); })()), "html", null, true);
        yield "\">
  <input type=\"hidden\" name=\"err_url\" value=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["err_url"]) || array_key_exists("err_url", $context) ? $context["err_url"] : (function () { throw new RuntimeError('Variable "err_url" does not exist.', 4, $this->source); })()), "html", null, true);
        yield "\">
  <input type=\"hidden\" name=\"sql_query\" value=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["sql_query"]) || array_key_exists("sql_query", $context) ? $context["sql_query"] : (function () { throw new RuntimeError('Variable "sql_query" does not exist.', 5, $this->source); })()), "html", null, true);
        yield "\">

  ";
        // line 7
        if ((($tmp = (isset($context["has_where_clause"]) || array_key_exists("has_where_clause", $context) ? $context["has_where_clause"] : (function () { throw new RuntimeError('Variable "has_where_clause" does not exist.', 7, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 8
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["where_clause_array"]) || array_key_exists("where_clause_array", $context) ? $context["where_clause_array"] : (function () { throw new RuntimeError('Variable "where_clause_array" does not exist.', 8, $this->source); })()));
            foreach ($context['_seq'] as $context["key_id"] => $context["where_clause"]) {
                // line 9
                yield "      <input type=\"hidden\" name=\"where_clause[";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key_id"], "html", null, true);
                yield "]\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::trim($context["where_clause"]), "html", null, true);
                yield "\">
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key_id'], $context['where_clause'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            yield "  ";
        }
        // line 12
        yield "
  <div class=\"col-auto\">
    <label class=\"form-label\" for=\"insert_rows\">";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Amount of rows to insert"), "html", null, true);
        yield "</label>
    <input class=\"form-control\" type=\"number\" name=\"insert_rows\" id=\"insert_rows\" value=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["insert_rows_default"]) || array_key_exists("insert_rows_default", $context) ? $context["insert_rows_default"] : (function () { throw new RuntimeError('Variable "insert_rows_default" does not exist.', 15, $this->source); })()), "html", null, true);
        yield "\" min=\"1\">
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
        return "table/insert/continue_insertion_form.twig";
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
        return array (  93 => 15,  89 => 14,  85 => 12,  82 => 11,  71 => 9,  66 => 8,  64 => 7,  59 => 5,  55 => 4,  51 => 3,  47 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<form id=\"continueForm\" method=\"post\" action=\"{{ url('/table/change') }}\" name=\"continueForm\" class=\"row g-3\">
  {{ get_hidden_inputs(db, table) }}
  <input type=\"hidden\" name=\"goto\" value=\"{{ goto }}\">
  <input type=\"hidden\" name=\"err_url\" value=\"{{ err_url }}\">
  <input type=\"hidden\" name=\"sql_query\" value=\"{{ sql_query }}\">

  {% if has_where_clause %}
    {% for key_id, where_clause in where_clause_array %}
      <input type=\"hidden\" name=\"where_clause[{{ key_id }}]\" value=\"{{ where_clause|trim }}\">
    {% endfor %}
  {% endif %}

  <div class=\"col-auto\">
    <label class=\"form-label\" for=\"insert_rows\">{{ t('Amount of rows to insert') }}</label>
    <input class=\"form-control\" type=\"number\" name=\"insert_rows\" id=\"insert_rows\" value=\"{{ insert_rows_default }}\" min=\"1\">
  </div>
</form>
", "table/insert/continue_insertion_form.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/table/insert/continue_insertion_form.twig");
    }
}
