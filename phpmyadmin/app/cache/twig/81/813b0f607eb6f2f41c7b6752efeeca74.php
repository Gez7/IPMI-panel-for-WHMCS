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

/* table/delete/confirm.twig */
class __TwigTemplate_ed1f48a3e2d83198c14fc8bed415a293 extends Template
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
        yield "<div class=\"container\">
  <form action=\"";
        // line 2
        yield PhpMyAdmin\Url::getFromRoute("/table/delete/rows");
        yield "\" method=\"post\" class=\"card\">
    ";
        // line 3
        yield PhpMyAdmin\Url::getHiddenInputs(["db" =>         // line 4
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 4, $this->source); })()), "table" =>         // line 5
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 5, $this->source); })()), "selected" =>         // line 6
(isset($context["selected"]) || array_key_exists("selected", $context) ? $context["selected"] : (function () { throw new RuntimeError('Variable "selected" does not exist.', 6, $this->source); })()), "original_sql_query" =>         // line 7
(isset($context["sql_query"]) || array_key_exists("sql_query", $context) ? $context["sql_query"] : (function () { throw new RuntimeError('Variable "sql_query" does not exist.', 7, $this->source); })()), "fk_checks" => "0"]);
        // line 9
        yield "

    <div class=\"card-header\">
      ";
        // line 12
        yield PhpMyAdmin\Html\Generator::getIcon("s_really");
        yield "
      ";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Do you really want to execute the following query?"), "html", null, true);
        yield "
    </div>

    <div class=\"card-body\">
      <ul class=\"mb-3\">
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["selected"]) || array_key_exists("selected", $context) ? $context["selected"] : (function () { throw new RuntimeError('Variable "selected" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 19
            yield "          <li><code>DELETE FROM ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(PhpMyAdmin\Util::backquote((isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 19, $this->source); })())), "html", null, true);
            yield " WHERE ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["row"], "html", null, true);
            yield ";</code></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        yield "      </ul>

      <div class=\"form-check\">
        <input class=\"form-check-input\" type=\"checkbox\" name=\"fk_checks\" id=\"checkForeignKeyCheckbox\" value=\"1\"";
        // line 24
        yield (((($tmp = (isset($context["is_foreign_key_check"]) || array_key_exists("is_foreign_key_check", $context) ? $context["is_foreign_key_check"] : (function () { throw new RuntimeError('Variable "is_foreign_key_check" does not exist.', 24, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" checked") : (""));
        yield ">
        <label class=\"form-check-label\" for=\"checkForeignKeyCheckbox\">";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Enable foreign key checks"), "html", null, true);
        yield "</label>
      </div>
    </div>

    <div class=\"card-footer\">
      <input id=\"buttonYes\" class=\"btn btn-danger\" type=\"submit\" name=\"mult_btn\" value=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Yes"), "html", null, true);
        yield "\">
      <input id=\"buttonNo\" class=\"btn btn-secondary\" type=\"submit\" name=\"mult_btn\" value=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("No"), "html", null, true);
        yield "\">
    </div>
  </form>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "table/delete/confirm.twig";
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
        return array (  108 => 31,  104 => 30,  96 => 25,  92 => 24,  87 => 21,  76 => 19,  72 => 18,  64 => 13,  60 => 12,  55 => 9,  53 => 7,  52 => 6,  51 => 5,  50 => 4,  49 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"container\">
  <form action=\"{{ url('/table/delete/rows') }}\" method=\"post\" class=\"card\">
    {{ get_hidden_inputs({
      'db': db,
      'table': table,
      'selected': selected,
      'original_sql_query': sql_query,
      'fk_checks': '0'
    }) }}

    <div class=\"card-header\">
      {{ get_icon('s_really') }}
      {{ t('Do you really want to execute the following query?') }}
    </div>

    <div class=\"card-body\">
      <ul class=\"mb-3\">
        {% for row in selected %}
          <li><code>DELETE FROM {{ backquote(table) }} WHERE {{ row }};</code></li>
        {% endfor %}
      </ul>

      <div class=\"form-check\">
        <input class=\"form-check-input\" type=\"checkbox\" name=\"fk_checks\" id=\"checkForeignKeyCheckbox\" value=\"1\"{{ is_foreign_key_check ? ' checked' }}>
        <label class=\"form-check-label\" for=\"checkForeignKeyCheckbox\">{{ t('Enable foreign key checks') }}</label>
      </div>
    </div>

    <div class=\"card-footer\">
      <input id=\"buttonYes\" class=\"btn btn-danger\" type=\"submit\" name=\"mult_btn\" value=\"{{ t('Yes') }}\">
      <input id=\"buttonNo\" class=\"btn btn-secondary\" type=\"submit\" name=\"mult_btn\" value=\"{{ t('No') }}\">
    </div>
  </form>
</div>
", "table/delete/confirm.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/table/delete/confirm.twig");
    }
}
