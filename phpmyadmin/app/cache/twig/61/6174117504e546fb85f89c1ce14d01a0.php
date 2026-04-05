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

/* table/insert/actions_panel.twig */
class __TwigTemplate_6e1cb2ff8b9d0686c7bb00296072796d extends Template
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
        yield "<div class=\"card\">
<fieldset class=\"card-body\" id=\"actions_panel\">
  <table class=\"table table-borderless w-auto tdblock\">
    <tr>
      <td class=\"text-nowrap align-middle\">
        <select name=\"submit_type\" class=\"control_at_footer\">
          ";
        // line 7
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["where_clause"]) || array_key_exists("where_clause", $context) ? $context["where_clause"] : (function () { throw new RuntimeError('Variable "where_clause" does not exist.', 7, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 8
            yield "            <option value=\"save\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Save"), "html", null, true);
            yield "</option>
          ";
        }
        // line 10
        yield "          <option value=\"insert\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Insert as new row"), "html", null, true);
        yield "</option>
          <option value=\"insertignore\">";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Insert as new row and ignore errors"), "html", null, true);
        yield "</option>
          <option value=\"showinsert\">";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Show insert query"), "html", null, true);
        yield "</option>
        </select>
      </td>
      <td class=\"align-middle\">
        <strong>";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("and then"), "html", null, true);
        yield "</strong>
      </td>
      <td class=\"text-nowrap align-middle\">
        <select name=\"after_insert\" class=\"control_at_footer\">
          <option value=\"back\"";
        // line 20
        yield ((((isset($context["after_insert"]) || array_key_exists("after_insert", $context) ? $context["after_insert"] : (function () { throw new RuntimeError('Variable "after_insert" does not exist.', 20, $this->source); })()) == "back")) ? (" selected") : (""));
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Go back to previous page"), "html", null, true);
        yield "</option>
          <option value=\"new_insert\"";
        // line 21
        yield ((((isset($context["after_insert"]) || array_key_exists("after_insert", $context) ? $context["after_insert"] : (function () { throw new RuntimeError('Variable "after_insert" does not exist.', 21, $this->source); })()) == "new_insert")) ? (" selected") : (""));
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Insert another new row"), "html", null, true);
        yield "</option>
          ";
        // line 22
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["where_clause"]) || array_key_exists("where_clause", $context) ? $context["where_clause"] : (function () { throw new RuntimeError('Variable "where_clause" does not exist.', 22, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 23
            yield "            <option value=\"same_insert\"";
            yield ((((isset($context["after_insert"]) || array_key_exists("after_insert", $context) ? $context["after_insert"] : (function () { throw new RuntimeError('Variable "after_insert" does not exist.', 23, $this->source); })()) == "same_insert")) ? (" selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Go back to this page"), "html", null, true);
            yield "</option>
            ";
            // line 24
            if (((isset($context["found_unique_key"]) || array_key_exists("found_unique_key", $context) ? $context["found_unique_key"] : (function () { throw new RuntimeError('Variable "found_unique_key" does not exist.', 24, $this->source); })()) && (isset($context["is_numeric"]) || array_key_exists("is_numeric", $context) ? $context["is_numeric"] : (function () { throw new RuntimeError('Variable "is_numeric" does not exist.', 24, $this->source); })()))) {
                // line 25
                yield "              <option value=\"edit_next\"";
                yield ((((isset($context["after_insert"]) || array_key_exists("after_insert", $context) ? $context["after_insert"] : (function () { throw new RuntimeError('Variable "after_insert" does not exist.', 25, $this->source); })()) == "edit_next")) ? (" selected") : (""));
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Edit next row"), "html", null, true);
                yield "</option>
            ";
            }
            // line 27
            yield "          ";
        }
        // line 28
        yield "        </select>
      </td>
    </tr>
    <tr>
      <td>
        ";
        // line 33
        yield PhpMyAdmin\Html\Generator::showHint(\_gettext("Use TAB key to move from value to value, or CTRL+arrows to move anywhere."));
        yield "
      </td>
      <td colspan=\"3\" class=\"text-end align-middle pb-2\">
        <input type=\"button\" class=\"btn btn-secondary preview_sql control_at_footer\" value=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Preview SQL"), "html", null, true);
        yield "\">
        <input type=\"reset\" class=\"btn btn-secondary control_at_footer\" value=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Reset"), "html", null, true);
        yield "\">
        <input type=\"submit\" class=\"btn btn-primary control_at_footer\" value=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Go"), "html", null, true);
        yield "\" id=\"buttonYes\">
      </td>
    </tr>
  </table>
</fieldset>
</div>
<div class=\"modal fade\" id=\"previewSqlModal\" tabindex=\"-1\" aria-labelledby=\"previewSqlModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"previewSqlModalLabel\">";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Loading"), "html", null, true);
        yield "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Close"), "html", null, true);
        yield "\"></button>
      </div>
      <div class=\"modal-body\">
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" id=\"previewSQLCloseButton\" data-bs-dismiss=\"modal\">";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Close"), "html", null, true);
        yield "</button>
      </div>
    </div>
  </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "table/insert/actions_panel.twig";
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
        return array (  161 => 54,  153 => 49,  149 => 48,  136 => 38,  132 => 37,  128 => 36,  122 => 33,  115 => 28,  112 => 27,  104 => 25,  102 => 24,  95 => 23,  93 => 22,  87 => 21,  81 => 20,  74 => 16,  67 => 12,  63 => 11,  58 => 10,  52 => 8,  50 => 7,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"card\">
<fieldset class=\"card-body\" id=\"actions_panel\">
  <table class=\"table table-borderless w-auto tdblock\">
    <tr>
      <td class=\"text-nowrap align-middle\">
        <select name=\"submit_type\" class=\"control_at_footer\">
          {% if where_clause is not empty %}
            <option value=\"save\">{{ t('Save') }}</option>
          {% endif %}
          <option value=\"insert\">{{ t('Insert as new row') }}</option>
          <option value=\"insertignore\">{{ t('Insert as new row and ignore errors') }}</option>
          <option value=\"showinsert\">{{ t('Show insert query') }}</option>
        </select>
      </td>
      <td class=\"align-middle\">
        <strong>{{ t('and then') }}</strong>
      </td>
      <td class=\"text-nowrap align-middle\">
        <select name=\"after_insert\" class=\"control_at_footer\">
          <option value=\"back\"{{ after_insert == 'back' ? ' selected' }}>{{ t('Go back to previous page') }}</option>
          <option value=\"new_insert\"{{ after_insert == 'new_insert' ? ' selected' }}>{{ t('Insert another new row') }}</option>
          {% if where_clause is not empty %}
            <option value=\"same_insert\"{{ after_insert == 'same_insert' ? ' selected' }}>{{ t('Go back to this page') }}</option>
            {% if found_unique_key and is_numeric %}
              <option value=\"edit_next\"{{ after_insert == 'edit_next' ? ' selected' }}>{{ t('Edit next row') }}</option>
            {% endif %}
          {% endif %}
        </select>
      </td>
    </tr>
    <tr>
      <td>
        {{ show_hint(t('Use TAB key to move from value to value, or CTRL+arrows to move anywhere.')) }}
      </td>
      <td colspan=\"3\" class=\"text-end align-middle pb-2\">
        <input type=\"button\" class=\"btn btn-secondary preview_sql control_at_footer\" value=\"{{ t('Preview SQL') }}\">
        <input type=\"reset\" class=\"btn btn-secondary control_at_footer\" value=\"{{ t('Reset') }}\">
        <input type=\"submit\" class=\"btn btn-primary control_at_footer\" value=\"{{ t('Go') }}\" id=\"buttonYes\">
      </td>
    </tr>
  </table>
</fieldset>
</div>
<div class=\"modal fade\" id=\"previewSqlModal\" tabindex=\"-1\" aria-labelledby=\"previewSqlModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"previewSqlModalLabel\">{{ t('Loading') }}</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"{{ t('Close') }}\"></button>
      </div>
      <div class=\"modal-body\">
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" id=\"previewSQLCloseButton\" data-bs-dismiss=\"modal\">{{ t('Close') }}</button>
      </div>
    </div>
  </div>
</div>
", "table/insert/actions_panel.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/table/insert/actions_panel.twig");
    }
}
