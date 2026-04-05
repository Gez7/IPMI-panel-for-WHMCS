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

/* triggers/row.twig */
class __TwigTemplate_bbc5cfef0cb5d5bc0d5555968a3d4cd8 extends Template
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
        yield ">
  <td>
    <input type=\"checkbox\" class=\"checkall\" name=\"item_name[]\" value=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trigger"]) || array_key_exists("trigger", $context) ? $context["trigger"] : (function () { throw new RuntimeError('Variable "trigger" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        yield "\">
  </td>
  <td>
    <span class='drop_sql hide'>";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trigger"]) || array_key_exists("trigger", $context) ? $context["trigger"] : (function () { throw new RuntimeError('Variable "trigger" does not exist.', 6, $this->source); })()), "getDropSql", [], "method", false, false, false, 6), "html", null, true);
        yield "</span>
    <strong>";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trigger"]) || array_key_exists("trigger", $context) ? $context["trigger"] : (function () { throw new RuntimeError('Variable "trigger" does not exist.', 7, $this->source); })()), "name", [], "any", false, false, false, 7), "html", null, true);
        yield "</strong>
  </td>
  ";
        // line 9
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 9, $this->source); })()))) {
            // line 10
            yield "    <td>
      <a href=\"";
            // line 11
            yield PhpMyAdmin\Url::getFromRoute("/triggers", ["db" => (isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 11, $this->source); })()), "table" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["trigger"]) || array_key_exists("trigger", $context) ? $context["trigger"] : (function () { throw new RuntimeError('Variable "trigger" does not exist.', 11, $this->source); })()), "table", [], "any", false, false, false, 11), "getName", [], "method", false, false, false, 11)]);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trigger"]) || array_key_exists("trigger", $context) ? $context["trigger"] : (function () { throw new RuntimeError('Variable "trigger" does not exist.', 11, $this->source); })()), "table", [], "any", false, false, false, 11), "html", null, true);
            yield "</a>
    </td>
  ";
        }
        // line 14
        yield "  <td>
    ";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["trigger"]) || array_key_exists("trigger", $context) ? $context["trigger"] : (function () { throw new RuntimeError('Variable "trigger" does not exist.', 15, $this->source); })()), "timing", [], "any", false, false, false, 15), "value", [], "any", false, false, false, 15), "html", null, true);
        yield "
  </td>
  <td>
    ";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["trigger"]) || array_key_exists("trigger", $context) ? $context["trigger"] : (function () { throw new RuntimeError('Variable "trigger" does not exist.', 18, $this->source); })()), "event", [], "any", false, false, false, 18), "value", [], "any", false, false, false, 18), "html", null, true);
        yield "
  </td>
  <td>
    ";
        // line 21
        if ((($tmp = (isset($context["has_edit_privilege"]) || array_key_exists("has_edit_privilege", $context) ? $context["has_edit_privilege"] : (function () { throw new RuntimeError('Variable "has_edit_privilege" does not exist.', 21, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 22
            yield "      <a class=\"ajax edit_anchor\" href=\"";
            yield PhpMyAdmin\Url::getFromRoute("/triggers", ["db" =>             // line 23
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 23, $this->source); })()), "table" =>             // line 24
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 24, $this->source); })()), "edit_item" => true, "item_name" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 26
(isset($context["trigger"]) || array_key_exists("trigger", $context) ? $context["trigger"] : (function () { throw new RuntimeError('Variable "trigger" does not exist.', 26, $this->source); })()), "name", [], "any", false, false, false, 26), "getName", [], "method", false, false, false, 26)]);
            // line 27
            yield "\">
        ";
            // line 28
            yield PhpMyAdmin\Html\Generator::getIcon("b_edit", \_gettext("Edit"));
            yield "
      </a>
    ";
        } else {
            // line 31
            yield "      ";
            yield PhpMyAdmin\Html\Generator::getIcon("bd_edit", \_gettext("Edit"));
            yield "
    ";
        }
        // line 33
        yield "  </td>
  <td>
    <a class=\"ajax export_anchor\" href=\"";
        // line 35
        yield PhpMyAdmin\Url::getFromRoute("/triggers", ["db" =>         // line 36
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 36, $this->source); })()), "table" =>         // line 37
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 37, $this->source); })()), "export_item" => true, "item_name" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 39
(isset($context["trigger"]) || array_key_exists("trigger", $context) ? $context["trigger"] : (function () { throw new RuntimeError('Variable "trigger" does not exist.', 39, $this->source); })()), "name", [], "any", false, false, false, 39), "getName", [], "method", false, false, false, 39)]);
        // line 40
        yield "\">
      ";
        // line 41
        yield PhpMyAdmin\Html\Generator::getIcon("b_export", \_gettext("Export"));
        yield "
    </a>
  </td>
  <td>
    ";
        // line 45
        if ((($tmp = (isset($context["has_drop_privilege"]) || array_key_exists("has_drop_privilege", $context) ? $context["has_drop_privilege"] : (function () { throw new RuntimeError('Variable "has_drop_privilege" does not exist.', 45, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 46
            yield "      ";
            yield PhpMyAdmin\Html\Generator::linkOrButton(PhpMyAdmin\Url::getFromRoute("/sql"), ["db" =>             // line 49
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 49, $this->source); })()), "table" =>             // line 50
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 50, $this->source); })()), "sql_query" => CoreExtension::getAttribute($this->env, $this->source,             // line 51
(isset($context["trigger"]) || array_key_exists("trigger", $context) ? $context["trigger"] : (function () { throw new RuntimeError('Variable "trigger" does not exist.', 51, $this->source); })()), "getDropSql", [], "method", false, false, false, 51), "goto" => PhpMyAdmin\Url::getFromRoute("/triggers", ["db" =>             // line 52
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 52, $this->source); })())])], PhpMyAdmin\Html\Generator::getIcon("b_drop", \_gettext("Drop")), ["class" => "ajax drop_anchor"]);
            // line 56
            yield "
    ";
        } else {
            // line 58
            yield "      ";
            yield PhpMyAdmin\Html\Generator::getIcon("bd_drop", \_gettext("Drop"));
            yield "
    ";
        }
        // line 60
        yield "  </td>
</tr>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "triggers/row.twig";
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
        return array (  156 => 60,  150 => 58,  146 => 56,  144 => 52,  143 => 51,  142 => 50,  141 => 49,  139 => 46,  137 => 45,  130 => 41,  127 => 40,  125 => 39,  124 => 37,  123 => 36,  122 => 35,  118 => 33,  112 => 31,  106 => 28,  103 => 27,  101 => 26,  100 => 24,  99 => 23,  97 => 22,  95 => 21,  89 => 18,  83 => 15,  80 => 14,  72 => 11,  69 => 10,  67 => 9,  62 => 7,  58 => 6,  52 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<tr{% if row_class is not empty %} class=\"{{ row_class }}\"{% endif %}>
  <td>
    <input type=\"checkbox\" class=\"checkall\" name=\"item_name[]\" value=\"{{ trigger.name }}\">
  </td>
  <td>
    <span class='drop_sql hide'>{{ trigger.getDropSql() }}</span>
    <strong>{{ trigger.name }}</strong>
  </td>
  {% if table is empty %}
    <td>
      <a href=\"{{ url('/triggers', {'db': db, 'table': trigger.table.getName()}) }}\">{{ trigger.table }}</a>
    </td>
  {% endif %}
  <td>
    {{ trigger.timing.value }}
  </td>
  <td>
    {{ trigger.event.value }}
  </td>
  <td>
    {% if has_edit_privilege %}
      <a class=\"ajax edit_anchor\" href=\"{{ url('/triggers', {
        'db': db,
        'table': table,
        'edit_item': true,
        'item_name': trigger.name.getName()
      }) }}\">
        {{ get_icon('b_edit', t('Edit')) }}
      </a>
    {% else %}
      {{ get_icon('bd_edit', t('Edit')) }}
    {% endif %}
  </td>
  <td>
    <a class=\"ajax export_anchor\" href=\"{{ url('/triggers', {
      'db': db,
      'table': table,
      'export_item': true,
      'item_name': trigger.name.getName()
    }) }}\">
      {{ get_icon('b_export', t('Export')) }}
    </a>
  </td>
  <td>
    {% if has_drop_privilege %}
      {{ link_or_button(
        url('/sql'),
        {
          'db': db,
          'table': table,
          'sql_query': trigger.getDropSql(),
          'goto': url('/triggers', {'db': db})
        },
        get_icon('b_drop', t('Drop')),
        {'class': 'ajax drop_anchor'}
      ) }}
    {% else %}
      {{ get_icon('bd_drop', t('Drop')) }}
    {% endif %}
  </td>
</tr>
", "triggers/row.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/triggers/row.twig");
    }
}
