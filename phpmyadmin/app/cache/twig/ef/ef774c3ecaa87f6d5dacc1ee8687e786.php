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

/* export/template_options.twig */
class __TwigTemplate_e5f1e5233bd54d95a5e316f0daf9b5f4 extends Template
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
        yield "<option value=\"\">-- ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Select a template"), "html", null, true);
        yield " --</option>

";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["templates"]) || array_key_exists("templates", $context) ? $context["templates"] : (function () { throw new RuntimeError('Variable "templates" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["template"]) {
            // line 4
            yield "    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["template"], "getId", [], "method", false, false, false, 4), "html", null, true);
            yield "\"";
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["template"], "getId", [], "method", false, false, false, 4) == (isset($context["selected_template"]) || array_key_exists("selected_template", $context) ? $context["selected_template"] : (function () { throw new RuntimeError('Variable "selected_template" does not exist.', 4, $this->source); })()))) ? (" selected") : (""));
            yield ">
        ";
            // line 5
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["template"], "getName", [], "method", false, false, false, 5), "html", null, true);
            yield "
    </option>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['template'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "export/template_options.twig";
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
        return array (  59 => 5,  52 => 4,  48 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<option value=\"\">-- {{ t('Select a template') }} --</option>

{% for template in templates %}
    <option value=\"{{ template.getId() }}\"{{ template.getId() == selected_template ? ' selected' }}>
        {{ template.getName() }}
    </option>
{% endfor %}
", "export/template_options.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/export/template_options.twig");
    }
}
