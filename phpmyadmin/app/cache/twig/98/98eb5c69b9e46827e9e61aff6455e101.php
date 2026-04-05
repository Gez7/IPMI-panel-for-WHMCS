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

/* preview_sql.twig */
class __TwigTemplate_d0c5889fe4881b3c79c8bc0e955ac735 extends Template
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
        yield "<div class=\"preview_sql\">
    ";
        // line 2
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["query_data"]) || array_key_exists("query_data", $context) ? $context["query_data"] : (function () { throw new RuntimeError('Variable "query_data" does not exist.', 2, $this->source); })()))) {
            // line 3
            yield "        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("No change"), "html", null, true);
            yield "
    ";
        } elseif (is_iterable(        // line 4
(isset($context["query_data"]) || array_key_exists("query_data", $context) ? $context["query_data"] : (function () { throw new RuntimeError('Variable "query_data" does not exist.', 4, $this->source); })()))) {
            // line 5
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["query_data"]) || array_key_exists("query_data", $context) ? $context["query_data"] : (function () { throw new RuntimeError('Variable "query_data" does not exist.', 5, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["query"]) {
                // line 6
                yield "            ";
                yield PhpMyAdmin\Html\Generator::formatSql($context["query"]);
                yield "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['query'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            yield "    ";
        } else {
            // line 9
            yield "        ";
            yield PhpMyAdmin\Html\Generator::formatSql((isset($context["query_data"]) || array_key_exists("query_data", $context) ? $context["query_data"] : (function () { throw new RuntimeError('Variable "query_data" does not exist.', 9, $this->source); })()));
            yield "
    ";
        }
        // line 11
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "preview_sql.twig";
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
        return array (  77 => 11,  71 => 9,  68 => 8,  59 => 6,  54 => 5,  52 => 4,  47 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"preview_sql\">
    {% if query_data is empty %}
        {{ t('No change') }}
    {% elseif query_data is iterable %}
        {% for query in query_data %}
            {{ format_sql(query) }}
        {% endfor %}
    {% else %}
        {{ format_sql(query_data) }}
    {% endif %}
</div>
", "preview_sql.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/preview_sql.twig");
    }
}
