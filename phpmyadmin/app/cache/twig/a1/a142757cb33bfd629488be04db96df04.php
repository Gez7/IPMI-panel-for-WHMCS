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

/* database/designer/page_selector.twig */
class __TwigTemplate_6d796ee2eaead2d5129d3a810d7aba2f extends Template
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
        yield "<select name=\"selected_page\" id=\"selected_page\">
    <option value=\"0\">-- ";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Select page"), "html", null, true);
        yield " --</option>
    ";
        // line 3
        if ((($tmp = (isset($context["pdfwork"]) || array_key_exists("pdfwork", $context) ? $context["pdfwork"] : (function () { throw new RuntimeError('Variable "pdfwork" does not exist.', 3, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 4
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 4, $this->source); })()));
            foreach ($context['_seq'] as $context["nr"] => $context["desc"]) {
                // line 5
                yield "            <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["nr"], "html", null, true);
                yield "\">
                ";
                // line 6
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["desc"], "html", null, true);
                yield "
            </option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['nr'], $context['desc'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            yield "    ";
        }
        // line 10
        yield "</select>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "database/designer/page_selector.twig";
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
        return array (  73 => 10,  70 => 9,  61 => 6,  56 => 5,  51 => 4,  49 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<select name=\"selected_page\" id=\"selected_page\">
    <option value=\"0\">-- {{ t('Select page') }} --</option>
    {% if pdfwork %}
        {% for nr, desc in pages %}
            <option value=\"{{ nr }}\">
                {{ desc }}
            </option>
        {% endfor %}
    {% endif %}
</select>
", "database/designer/page_selector.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/database/designer/page_selector.twig");
    }
}
