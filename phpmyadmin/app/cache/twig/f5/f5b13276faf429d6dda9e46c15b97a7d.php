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

/* database/routines/row.twig */
class __TwigTemplate_09fbbe9e216276e05c2bfabd9167ec7c extends Template
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
        yield "<tr";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["row_class"]) || array_key_exists("row_class", $context) ? $context["row_class"] : (function () { throw new RuntimeError('Variable "row_class" does not exist.', 1, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["row_class"]) || array_key_exists("row_class", $context) ? $context["row_class"] : (function () { throw new RuntimeError('Variable "row_class" does not exist.', 1, $this->source); })()), "html", null, true);
            yield "\"";
        }
        yield " data-filter-row=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["routine"]) || array_key_exists("routine", $context) ? $context["routine"] : (function () { throw new RuntimeError('Variable "routine" does not exist.', 1, $this->source); })()), "name", [], "any", false, false, false, 1)), "html", null, true);
        yield "\">
  <td>
    <input type=\"checkbox\" class=\"checkall\" name=\"item_name[]\" value=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["routine"]) || array_key_exists("routine", $context) ? $context["routine"] : (function () { throw new RuntimeError('Variable "routine" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        yield "\">
  </td>
  <td>
    <span class=\"drop_sql hide\">";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["sql_drop"]) || array_key_exists("sql_drop", $context) ? $context["sql_drop"] : (function () { throw new RuntimeError('Variable "sql_drop" does not exist.', 6, $this->source); })()), "html", null, true);
        yield "</span>
    <strong>";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["routine"]) || array_key_exists("routine", $context) ? $context["routine"] : (function () { throw new RuntimeError('Variable "routine" does not exist.', 7, $this->source); })()), "name", [], "any", false, false, false, 7), "html", null, true);
        yield "</strong>
  </td>
  <td>";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["routine"]) || array_key_exists("routine", $context) ? $context["routine"] : (function () { throw new RuntimeError('Variable "routine" does not exist.', 9, $this->source); })()), "type", [], "any", false, false, false, 9), "html", null, true);
        yield "</td>
  <td dir=\"ltr\">";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["routine"]) || array_key_exists("routine", $context) ? $context["routine"] : (function () { throw new RuntimeError('Variable "routine" does not exist.', 10, $this->source); })()), "returns", [], "any", false, false, false, 10), "html", null, true);
        yield "</td>
  <td>
    ";
        // line 12
        if ((($tmp = (isset($context["has_edit_privilege"]) || array_key_exists("has_edit_privilege", $context) ? $context["has_edit_privilege"] : (function () { throw new RuntimeError('Variable "has_edit_privilege" does not exist.', 12, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 13
            yield "      <a class=\"ajax edit_anchor\" href=\"";
            yield PhpMyAdmin\Url::getFromRoute("/database/routines", ["db" =>             // line 14
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 14, $this->source); })()), "table" =>             // line 15
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 15, $this->source); })()), "edit_item" => true, "item_name" => CoreExtension::getAttribute($this->env, $this->source,             // line 17
(isset($context["routine"]) || array_key_exists("routine", $context) ? $context["routine"] : (function () { throw new RuntimeError('Variable "routine" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17), "item_type" => CoreExtension::getAttribute($this->env, $this->source,             // line 18
(isset($context["routine"]) || array_key_exists("routine", $context) ? $context["routine"] : (function () { throw new RuntimeError('Variable "routine" does not exist.', 18, $this->source); })()), "type", [], "any", false, false, false, 18)]);
            // line 19
            yield "\">
        ";
            // line 20
            yield PhpMyAdmin\Html\Generator::getIcon("b_edit", \_gettext("Edit"));
            yield "
      </a>
    ";
        } else {
            // line 23
            yield "      ";
            yield PhpMyAdmin\Html\Generator::getIcon("bd_edit", \_gettext("Edit"));
            yield "
    ";
        }
        // line 25
        yield "  </td>
  <td>
    ";
        // line 27
        if ((($tmp = (isset($context["has_execute_privilege"]) || array_key_exists("has_execute_privilege", $context) ? $context["has_execute_privilege"] : (function () { throw new RuntimeError('Variable "has_execute_privilege" does not exist.', 27, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 28
            yield "      <a class=\"ajax exec_anchor\" href=\"";
            yield PhpMyAdmin\Url::getFromRoute("/database/routines", ["db" =>             // line 29
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 29, $this->source); })()), "table" =>             // line 30
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 30, $this->source); })()), "execute_dialog" => true, "item_name" => CoreExtension::getAttribute($this->env, $this->source,             // line 32
(isset($context["routine"]) || array_key_exists("routine", $context) ? $context["routine"] : (function () { throw new RuntimeError('Variable "routine" does not exist.', 32, $this->source); })()), "name", [], "any", false, false, false, 32), "item_type" => CoreExtension::getAttribute($this->env, $this->source,             // line 33
(isset($context["routine"]) || array_key_exists("routine", $context) ? $context["routine"] : (function () { throw new RuntimeError('Variable "routine" does not exist.', 33, $this->source); })()), "type", [], "any", false, false, false, 33)]);
            // line 34
            yield "\">
        ";
            // line 35
            yield PhpMyAdmin\Html\Generator::getIcon("b_nextpage", \_gettext("Execute"));
            yield "
      </a>
    ";
        } else {
            // line 38
            yield "      ";
            yield PhpMyAdmin\Html\Generator::getIcon("bd_nextpage", \_gettext("Execute"));
            yield "
    ";
        }
        // line 40
        yield "  </td>
  <td>
    ";
        // line 42
        if ((($tmp = (isset($context["has_export_privilege"]) || array_key_exists("has_export_privilege", $context) ? $context["has_export_privilege"] : (function () { throw new RuntimeError('Variable "has_export_privilege" does not exist.', 42, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 43
            yield "      <a class=\"ajax export_anchor\" href=\"";
            yield PhpMyAdmin\Url::getFromRoute("/database/routines", ["db" =>             // line 44
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 44, $this->source); })()), "table" =>             // line 45
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 45, $this->source); })()), "export_item" => true, "item_name" => CoreExtension::getAttribute($this->env, $this->source,             // line 47
(isset($context["routine"]) || array_key_exists("routine", $context) ? $context["routine"] : (function () { throw new RuntimeError('Variable "routine" does not exist.', 47, $this->source); })()), "name", [], "any", false, false, false, 47), "item_type" => CoreExtension::getAttribute($this->env, $this->source,             // line 48
(isset($context["routine"]) || array_key_exists("routine", $context) ? $context["routine"] : (function () { throw new RuntimeError('Variable "routine" does not exist.', 48, $this->source); })()), "type", [], "any", false, false, false, 48)]);
            // line 49
            yield "\">
        ";
            // line 50
            yield PhpMyAdmin\Html\Generator::getIcon("b_export", \_gettext("Export"));
            yield "
      </a>
    ";
        } else {
            // line 53
            yield "      ";
            yield PhpMyAdmin\Html\Generator::getIcon("bd_export", \_gettext("Export"));
            yield "
    ";
        }
        // line 55
        yield "  </td>
  <td>
    ";
        // line 57
        yield PhpMyAdmin\Html\Generator::linkOrButton(PhpMyAdmin\Url::getFromRoute("/sql"), ["db" =>         // line 60
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 60, $this->source); })()), "table" =>         // line 61
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 61, $this->source); })()), "sql_query" =>         // line 62
(isset($context["sql_drop"]) || array_key_exists("sql_drop", $context) ? $context["sql_drop"] : (function () { throw new RuntimeError('Variable "sql_drop" does not exist.', 62, $this->source); })()), "goto" => PhpMyAdmin\Url::getFromRoute("/database/routines", ["db" =>         // line 63
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 63, $this->source); })())])], PhpMyAdmin\Html\Generator::getIcon("b_drop", \_gettext("Drop")), ["class" => "ajax drop_anchor"]);
        // line 67
        yield "
  </td>
</tr>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "database/routines/row.twig";
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
        return array (  168 => 67,  166 => 63,  165 => 62,  164 => 61,  163 => 60,  162 => 57,  158 => 55,  152 => 53,  146 => 50,  143 => 49,  141 => 48,  140 => 47,  139 => 45,  138 => 44,  136 => 43,  134 => 42,  130 => 40,  124 => 38,  118 => 35,  115 => 34,  113 => 33,  112 => 32,  111 => 30,  110 => 29,  108 => 28,  106 => 27,  102 => 25,  96 => 23,  90 => 20,  87 => 19,  85 => 18,  84 => 17,  83 => 15,  82 => 14,  80 => 13,  78 => 12,  73 => 10,  69 => 9,  64 => 7,  60 => 6,  54 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<tr{% if row_class is not empty %} class=\"{{ row_class }}\"{% endif %} data-filter-row=\"{{ routine.name|upper }}\">
  <td>
    <input type=\"checkbox\" class=\"checkall\" name=\"item_name[]\" value=\"{{ routine.name }}\">
  </td>
  <td>
    <span class=\"drop_sql hide\">{{ sql_drop }}</span>
    <strong>{{ routine.name }}</strong>
  </td>
  <td>{{ routine.type }}</td>
  <td dir=\"ltr\">{{ routine.returns }}</td>
  <td>
    {% if has_edit_privilege %}
      <a class=\"ajax edit_anchor\" href=\"{{ url('/database/routines', {
        'db': db,
        'table': table,
        'edit_item': true,
        'item_name': routine.name,
        'item_type': routine.type
      }) }}\">
        {{ get_icon('b_edit', t('Edit')) }}
      </a>
    {% else %}
      {{ get_icon('bd_edit', t('Edit')) }}
    {% endif %}
  </td>
  <td>
    {% if has_execute_privilege %}
      <a class=\"ajax exec_anchor\" href=\"{{ url('/database/routines', {
        'db': db,
        'table': table,
        'execute_dialog': true,
        'item_name': routine.name,
        'item_type': routine.type
      }) }}\">
        {{ get_icon('b_nextpage', t('Execute')) }}
      </a>
    {% else %}
      {{ get_icon('bd_nextpage', t('Execute')) }}
    {% endif %}
  </td>
  <td>
    {% if has_export_privilege %}
      <a class=\"ajax export_anchor\" href=\"{{ url('/database/routines', {
        'db': db,
        'table': table,
        'export_item': true,
        'item_name': routine.name,
        'item_type': routine.type
      }) }}\">
        {{ get_icon('b_export', t('Export')) }}
      </a>
    {% else %}
      {{ get_icon('bd_export', t('Export')) }}
    {% endif %}
  </td>
  <td>
    {{ link_or_button(
      url('/sql'),
      {
        'db': db,
        'table': table,
        'sql_query': sql_drop,
        'goto': url('/database/routines', {'db': db})
      },
      get_icon('b_drop', t('Drop')),
      {'class': 'ajax drop_anchor'}
    ) }}
  </td>
</tr>
", "database/routines/row.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/database/routines/row.twig");
    }
}
