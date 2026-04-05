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

/* database/structure/check_all_tables.twig */
class __TwigTemplate_f74739f494ecf76230bc084a4d1b1076 extends Template
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
        yield "<div class=\"clearfloat d-print-none\">
    ";
        // line 2
        yield PhpMyAdmin\Html\Generator::getImage("select_all_arrow", \_gettext("With selected:"), ["dir" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["pma"]) || array_key_exists("pma", $context) ? $context["pma"] : (function () { throw new RuntimeError('Variable "pma" does not exist.', 2, $this->source); })()), "text_dir", [], "any", false, false, false, 2), "width" => "38", "height" => "22"]);
        yield "
    <input type=\"checkbox\" id=\"tablesForm_checkall\" class=\"checkall_box\" title=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Check all"), "html", null, true);
        yield "\">
    <label for=\"tablesForm_checkall\">";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Check all"), "html", null, true);
        yield "</label>
    ";
        // line 5
        if (((isset($context["overhead_check"]) || array_key_exists("overhead_check", $context) ? $context["overhead_check"] : (function () { throw new RuntimeError('Variable "overhead_check" does not exist.', 5, $this->source); })()) != "")) {
            // line 6
            yield "        / <a href=\"#\" class=\"checkall-filter\" data-checkall-selector=\".tbl-overhead\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Check tables having overhead"), "html", null, true);
            yield "</a>
    ";
        }
        // line 8
        yield "    <select name=\"submit_mult\" class=\"mx-5 my-0\">
        <option value=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("With selected:"), "html", null, true);
        yield "\" selected>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("With selected:"), "html", null, true);
        yield "</option>
        <option value=\"copy_tbl\">";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Copy table"), "html", null, true);
        yield "</option>
        <option value=\"show_create\">";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Show create"), "html", null, true);
        yield "</option>
        <option value=\"export\">";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Export"), "html", null, true);
        yield "</option>
        ";
        // line 13
        if (( !(isset($context["db_is_system_schema"]) || array_key_exists("db_is_system_schema", $context) ? $context["db_is_system_schema"] : (function () { throw new RuntimeError('Variable "db_is_system_schema" does not exist.', 13, $this->source); })()) &&  !(isset($context["disable_multi_table"]) || array_key_exists("disable_multi_table", $context) ? $context["disable_multi_table"] : (function () { throw new RuntimeError('Variable "disable_multi_table" does not exist.', 13, $this->source); })()))) {
            // line 14
            yield "            <optgroup label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Delete data or table"), "html", null, true);
            yield "\">
                <option value=\"empty_tbl\">";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Empty"), "html", null, true);
            yield "</option>
                <option value=\"drop_tbl\">";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Drop"), "html", null, true);
            yield "</option>
            </optgroup>
            <optgroup label=\"";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Table maintenance"), "html", null, true);
            yield "\">
                <option value=\"analyze_tbl\">";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Analyze table"), "html", null, true);
            yield "</option>
                <option value=\"check_tbl\">";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Check table"), "html", null, true);
            yield "</option>
                <option value=\"checksum_tbl\">";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Checksum table"), "html", null, true);
            yield "</option>
                <option value=\"optimize_tbl\">";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Optimize table"), "html", null, true);
            yield "</option>
                <option value=\"repair_tbl\">";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Repair table"), "html", null, true);
            yield "</option>
            </optgroup>
            <optgroup label=\"";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Prefix"), "html", null, true);
            yield "\">
                <option value=\"add_prefix_tbl\">";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Add prefix to table"), "html", null, true);
            yield "</option>
                <option value=\"replace_prefix_tbl\">";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Replace table prefix"), "html", null, true);
            yield "</option>
                <option value=\"copy_tbl_change_prefix\">";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Copy table with prefix"), "html", null, true);
            yield "</option>
            </optgroup>
        ";
        }
        // line 31
        yield "        ";
        if ((array_key_exists("central_columns_work", $context) && (isset($context["central_columns_work"]) || array_key_exists("central_columns_work", $context) ? $context["central_columns_work"] : (function () { throw new RuntimeError('Variable "central_columns_work" does not exist.', 31, $this->source); })()))) {
            // line 32
            yield "            <optgroup label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Central columns"), "html", null, true);
            yield "\">
                <option value=\"sync_unique_columns_central_list\">";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Add columns to central list"), "html", null, true);
            yield "</option>
                <option value=\"delete_unique_columns_central_list\">";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Remove columns from central list"), "html", null, true);
            yield "</option>
                <option value=\"make_consistent_with_central_list\">";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Make consistent with central list"), "html", null, true);
            yield "</option>
            </optgroup>
        ";
        }
        // line 38
        yield "    </select>
    ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["hidden_fields"]) || array_key_exists("hidden_fields", $context) ? $context["hidden_fields"] : (function () { throw new RuntimeError('Variable "hidden_fields" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["hidden_field"]) {
            // line 40
            yield "        <input type=\"hidden\" name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hidden_field"], "name", [], "any", false, false, false, 40), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hidden_field"], "value", [], "any", false, false, false, 40), "html", null, true);
            yield "\">
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['hidden_field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        yield "</div>

";
        // line 44
        if ((array_key_exists("central_columns_work", $context) && (isset($context["central_columns_work"]) || array_key_exists("central_columns_work", $context) ? $context["central_columns_work"] : (function () { throw new RuntimeError('Variable "central_columns_work" does not exist.', 44, $this->source); })()))) {
            // line 45
            yield "  <div class=\"modal fade\" id=\"makeConsistentWithCentralListModal\" data-bs-backdrop=\"static\" data-bs-keyboard=\"false\"
       tabindex=\"-1\" aria-labelledby=\"makeConsistentWithCentralListModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\" id=\"makeConsistentWithCentralListModalLabel\">";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Are you sure?"), "html", null, true);
            yield "</h5>
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Cancel"), "html", null, true);
            yield "\"></button>
        </div>
        <div class=\"modal-body\">
          ";
            // line 54
            yield PhpMyAdmin\Sanitize::convertBBCode(\_gettext("This action may change some of the columns definition.[br]Are you sure you want to continue?"));
            yield "
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Cancel"), "html", null, true);
            yield "</button>
          <button type=\"button\" class=\"btn btn-primary\" id=\"makeConsistentWithCentralListContinue\">";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Continue"), "html", null, true);
            yield "</button>
        </div>
      </div>
    </div>
  </div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "database/structure/check_all_tables.twig";
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
        return array (  218 => 58,  214 => 57,  208 => 54,  202 => 51,  198 => 50,  191 => 45,  189 => 44,  185 => 42,  174 => 40,  170 => 39,  167 => 38,  161 => 35,  157 => 34,  153 => 33,  148 => 32,  145 => 31,  139 => 28,  135 => 27,  131 => 26,  127 => 25,  122 => 23,  118 => 22,  114 => 21,  110 => 20,  106 => 19,  102 => 18,  97 => 16,  93 => 15,  88 => 14,  86 => 13,  82 => 12,  78 => 11,  74 => 10,  68 => 9,  65 => 8,  59 => 6,  57 => 5,  53 => 4,  49 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"clearfloat d-print-none\">
    {{ get_image('select_all_arrow', t('With selected:'), {'dir': pma.text_dir, 'width': '38', 'height': '22'}) }}
    <input type=\"checkbox\" id=\"tablesForm_checkall\" class=\"checkall_box\" title=\"{{ t('Check all') }}\">
    <label for=\"tablesForm_checkall\">{{ t('Check all') }}</label>
    {% if overhead_check != '' %}
        / <a href=\"#\" class=\"checkall-filter\" data-checkall-selector=\".tbl-overhead\">{{ t('Check tables having overhead') }}</a>
    {% endif %}
    <select name=\"submit_mult\" class=\"mx-5 my-0\">
        <option value=\"{{ t('With selected:') }}\" selected>{{ t('With selected:') }}</option>
        <option value=\"copy_tbl\">{{ t('Copy table') }}</option>
        <option value=\"show_create\">{{ t('Show create') }}</option>
        <option value=\"export\">{{ t('Export') }}</option>
        {% if not db_is_system_schema and not disable_multi_table %}
            <optgroup label=\"{{ t('Delete data or table') }}\">
                <option value=\"empty_tbl\">{{ t('Empty') }}</option>
                <option value=\"drop_tbl\">{{ t('Drop') }}</option>
            </optgroup>
            <optgroup label=\"{{ t('Table maintenance') }}\">
                <option value=\"analyze_tbl\">{{ t('Analyze table') }}</option>
                <option value=\"check_tbl\">{{ t('Check table') }}</option>
                <option value=\"checksum_tbl\">{{ t('Checksum table') }}</option>
                <option value=\"optimize_tbl\">{{ t('Optimize table') }}</option>
                <option value=\"repair_tbl\">{{ t('Repair table') }}</option>
            </optgroup>
            <optgroup label=\"{{ t('Prefix') }}\">
                <option value=\"add_prefix_tbl\">{{ t('Add prefix to table') }}</option>
                <option value=\"replace_prefix_tbl\">{{ t('Replace table prefix') }}</option>
                <option value=\"copy_tbl_change_prefix\">{{ t('Copy table with prefix') }}</option>
            </optgroup>
        {% endif %}
        {% if central_columns_work is defined and central_columns_work %}
            <optgroup label=\"{{ t('Central columns') }}\">
                <option value=\"sync_unique_columns_central_list\">{{ t('Add columns to central list') }}</option>
                <option value=\"delete_unique_columns_central_list\">{{ t('Remove columns from central list') }}</option>
                <option value=\"make_consistent_with_central_list\">{{ t('Make consistent with central list') }}</option>
            </optgroup>
        {% endif %}
    </select>
    {% for hidden_field in hidden_fields %}
        <input type=\"hidden\" name=\"{{ hidden_field.name }}\" value=\"{{ hidden_field.value }}\">
    {% endfor %}
</div>

{% if central_columns_work is defined and central_columns_work %}
  <div class=\"modal fade\" id=\"makeConsistentWithCentralListModal\" data-bs-backdrop=\"static\" data-bs-keyboard=\"false\"
       tabindex=\"-1\" aria-labelledby=\"makeConsistentWithCentralListModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\" id=\"makeConsistentWithCentralListModalLabel\">{{ t('Are you sure?') }}</h5>
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"{{ t('Cancel') }}\"></button>
        </div>
        <div class=\"modal-body\">
          {{ t('This action may change some of the columns definition.[br]Are you sure you want to continue?')|sanitize }}
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">{{ t('Cancel') }}</button>
          <button type=\"button\" class=\"btn btn-primary\" id=\"makeConsistentWithCentralListContinue\">{{ t('Continue') }}</button>
        </div>
      </div>
    </div>
  </div>
{% endif %}
", "database/structure/check_all_tables.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/database/structure/check_all_tables.twig");
    }
}
