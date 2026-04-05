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

/* database/structure/copy_form.twig */
class __TwigTemplate_ada2c4396c779b95583c0ac3d4038669 extends Template
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
        yield "<form id=\"ajax_form\" action=\"";
        yield PhpMyAdmin\Url::getFromRoute("/database/structure/copy-table");
        yield "\" method=\"post\">
  ";
        // line 2
        yield PhpMyAdmin\Url::getHiddenInputs((isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 2, $this->source); })()));
        yield "

  <div class=\"mb-3\">
    <label for=\"databaseNameSelect\" class=\"form-label\">";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Database:"), "html", null, true);
        yield "</label>
    <select class=\"form-select\" id=\"databaseNameSelect\" name=\"target_db\">
      ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 7, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["each_db"]) {
            // line 8
            yield "        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["each_db"], "name", [], "any", false, false, false, 8), "html", null, true);
            yield "\"";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["each_db"], "is_selected", [], "any", false, false, false, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["each_db"], "name", [], "any", false, false, false, 8), "html", null, true);
            yield "</option>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['each_db'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        yield "    </select>
  </div>

  <fieldset class=\"mb-3\">
    <legend class=\"col-form-label\">";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Options:"), "html", null, true);
        yield "</legend>
    <div class=\"form-check\">
      <input class=\"form-check-input\" type=\"radio\" name=\"what\" id=\"whatDataRadio\" value=\"data\" checked>
      <label class=\"form-check-label\" for=\"whatDataRadio\">";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Structure and data"), "html", null, true);
        yield "</label>
    </div>
    <div class=\"form-check\">
      <input class=\"form-check-input\" type=\"radio\" name=\"what\" id=\"whatStructureRadio\" value=\"structure\">
      <label class=\"form-check-label\" for=\"whatStructureRadio\">";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Structure only"), "html", null, true);
        yield "</label>
    </div>
    <div class=\"form-check\">
      <input class=\"form-check-input\" type=\"radio\" name=\"what\" id=\"whatDataOnlyRadio\" value=\"dataonly\">
      <label class=\"form-check-label\" for=\"whatDataOnlyRadio\">";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Data only"), "html", null, true);
        yield "</label>
    </div>
  </fieldset>

  <div class=\"form-check\">
    <input class=\"form-check-input\" type=\"checkbox\" value=\"true\" name=\"drop_if_exists\" id=\"addDropTableCheckbox\">
    <label class=\"form-check-label\" for=\"addDropTableCheckbox\">";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Add DROP TABLE"), "html", null, true);
        yield "</label>
  </div>
  <div class=\"form-check\">
    <input class=\"form-check-input\" type=\"checkbox\" value=\"1\" name=\"sql_auto_increment\" id=\"addAutoIncrementCheckbox\">
    <label class=\"form-check-label\" for=\"addAutoIncrementCheckbox\">";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Add AUTO INCREMENT value"), "html", null, true);
        yield "</label>
  </div>
  <div class=\"form-check mb-3\">
    <input class=\"form-check-input\" type=\"checkbox\" value=\"1\" name=\"add_constraints\" id=\"addConstraintsCheckbox\" checked>
    <label class=\"form-check-label\" for=\"addConstraintsCheckbox\">";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Add constraints"), "html", null, true);
        yield "</label>
  </div>

  <div class=\"form-check\">
    <input class=\"form-check-input\" type=\"checkbox\" value=\"1\" name=\"adjust_privileges\" id=\"adjustPrivilegesCheckbox\">
    <label class=\"form-check-label\" for=\"adjustPrivilegesCheckbox\">
      ";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Adjust privileges"), "html", null, true);
        yield "
      ";
        // line 46
        yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("faq", "faq6-39");
        yield "
    </label>
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
        return "database/structure/copy_form.twig";
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
        return array (  137 => 46,  133 => 45,  124 => 39,  117 => 35,  110 => 31,  101 => 25,  94 => 21,  87 => 17,  81 => 14,  75 => 10,  62 => 8,  58 => 7,  53 => 5,  47 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<form id=\"ajax_form\" action=\"{{ url('/database/structure/copy-table') }}\" method=\"post\">
  {{ get_hidden_inputs(url_params) }}

  <div class=\"mb-3\">
    <label for=\"databaseNameSelect\" class=\"form-label\">{{ t('Database:') }}</label>
    <select class=\"form-select\" id=\"databaseNameSelect\" name=\"target_db\">
      {% for each_db in options %}
        <option value=\"{{ each_db.name }}\"{{ each_db.is_selected ? ' selected' }}>{{ each_db.name }}</option>
      {% endfor %}
    </select>
  </div>

  <fieldset class=\"mb-3\">
    <legend class=\"col-form-label\">{{ t('Options:') }}</legend>
    <div class=\"form-check\">
      <input class=\"form-check-input\" type=\"radio\" name=\"what\" id=\"whatDataRadio\" value=\"data\" checked>
      <label class=\"form-check-label\" for=\"whatDataRadio\">{{ t('Structure and data') }}</label>
    </div>
    <div class=\"form-check\">
      <input class=\"form-check-input\" type=\"radio\" name=\"what\" id=\"whatStructureRadio\" value=\"structure\">
      <label class=\"form-check-label\" for=\"whatStructureRadio\">{{ t('Structure only') }}</label>
    </div>
    <div class=\"form-check\">
      <input class=\"form-check-input\" type=\"radio\" name=\"what\" id=\"whatDataOnlyRadio\" value=\"dataonly\">
      <label class=\"form-check-label\" for=\"whatDataOnlyRadio\">{{ t('Data only') }}</label>
    </div>
  </fieldset>

  <div class=\"form-check\">
    <input class=\"form-check-input\" type=\"checkbox\" value=\"true\" name=\"drop_if_exists\" id=\"addDropTableCheckbox\">
    <label class=\"form-check-label\" for=\"addDropTableCheckbox\">{{ t('Add DROP TABLE') }}</label>
  </div>
  <div class=\"form-check\">
    <input class=\"form-check-input\" type=\"checkbox\" value=\"1\" name=\"sql_auto_increment\" id=\"addAutoIncrementCheckbox\">
    <label class=\"form-check-label\" for=\"addAutoIncrementCheckbox\">{{ t('Add AUTO INCREMENT value') }}</label>
  </div>
  <div class=\"form-check mb-3\">
    <input class=\"form-check-input\" type=\"checkbox\" value=\"1\" name=\"add_constraints\" id=\"addConstraintsCheckbox\" checked>
    <label class=\"form-check-label\" for=\"addConstraintsCheckbox\">{{ t('Add constraints') }}</label>
  </div>

  <div class=\"form-check\">
    <input class=\"form-check-input\" type=\"checkbox\" value=\"1\" name=\"adjust_privileges\" id=\"adjustPrivilegesCheckbox\">
    <label class=\"form-check-label\" for=\"adjustPrivilegesCheckbox\">
      {{ t('Adjust privileges') }}
      {{ show_docu('faq', 'faq6-39') }}
    </label>
  </div>
</form>
", "database/structure/copy_form.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/database/structure/copy_form.twig");
    }
}
