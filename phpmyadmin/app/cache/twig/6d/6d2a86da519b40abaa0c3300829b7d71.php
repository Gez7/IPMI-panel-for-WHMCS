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

/* database/designer/schema_export.twig */
class __TwigTemplate_8788bb0609134fc6589081cf01e5069a extends Template
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
        yield "<form method=\"post\" action=\"";
        yield PhpMyAdmin\Url::getFromRoute("/schema-export");
        yield "\" class=\"disableAjax\" id=\"id_export_pages\">
  ";
        // line 2
        yield PhpMyAdmin\Url::getHiddenInputs((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 2, $this->source); })()));
        yield "
  <input type=\"hidden\" name=\"page_number\" value=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 3, $this->source); })()), "html", null, true);
        yield "\">

  <div class=\"mb-3\">
    <label class=\"form-label\" for=\"plugins\">";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Select export relational type:"), "html", null, true);
        yield "</label>
    <select class=\"form-select\" id=\"plugins\" name=\"export_type\">
      ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["plugins_choice"]) || array_key_exists("plugins_choice", $context) ? $context["plugins_choice"] : (function () { throw new RuntimeError('Variable "plugins_choice" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 9
            yield "        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 9), "html", null, true);
            yield "\"";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["option"], "is_selected", [], "any", false, false, false, 9)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "text", [], "any", false, false, false, 9), "html", null, true);
            yield "</option>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        yield "    </select>
  </div>

  <div>
    ";
        // line 15
        yield (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 15, $this->source); })());
        yield "
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
        return "database/designer/schema_export.twig";
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
        return array (  85 => 15,  79 => 11,  66 => 9,  62 => 8,  57 => 6,  51 => 3,  47 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<form method=\"post\" action=\"{{ url('/schema-export') }}\" class=\"disableAjax\" id=\"id_export_pages\">
  {{ get_hidden_inputs(db) }}
  <input type=\"hidden\" name=\"page_number\" value=\"{{ page }}\">

  <div class=\"mb-3\">
    <label class=\"form-label\" for=\"plugins\">{{ t('Select export relational type:') }}</label>
    <select class=\"form-select\" id=\"plugins\" name=\"export_type\">
      {% for option in plugins_choice %}
        <option value=\"{{ option.name }}\"{{ option.is_selected ? ' selected' }}>{{ option.text }}</option>
      {% endfor %}
    </select>
  </div>

  <div>
    {{ options|raw }}
  </div>
</form>
", "database/designer/schema_export.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/database/designer/schema_export.twig");
    }
}
