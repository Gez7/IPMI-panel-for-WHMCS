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

/* navigation/tree/path.twig */
class __TwigTemplate_2373bddc16e7ef64e0f9b5bde8f5f6b4 extends Template
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
        yield "<div class='list_container hide'>
  <ul";
        // line 2
        yield (((($tmp = (isset($context["has_search_results"]) || array_key_exists("has_search_results", $context) ? $context["has_search_results"] : (function () { throw new RuntimeError('Variable "has_search_results" does not exist.', 2, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" class=\"search_results\"") : (""));
        yield ">
    ";
        // line 3
        yield (isset($context["list_content"]) || array_key_exists("list_content", $context) ? $context["list_content"] : (function () { throw new RuntimeError('Variable "list_content" does not exist.', 3, $this->source); })());
        yield "
  </ul>

  ";
        // line 6
        if ((($tmp =  !(isset($context["is_tree"]) || array_key_exists("is_tree", $context) ? $context["is_tree"] : (function () { throw new RuntimeError('Variable "is_tree" does not exist.', 6, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 7
            yield "    <span class='hide loaded_db'>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode((isset($context["parent_name"]) || array_key_exists("parent_name", $context) ? $context["parent_name"] : (function () { throw new RuntimeError('Variable "parent_name" does not exist.', 7, $this->source); })())), "html", null, true);
            yield "</span>
    ";
            // line 8
            if (Twig\Extension\CoreExtension::testEmpty((isset($context["list_content"]) || array_key_exists("list_content", $context) ? $context["list_content"] : (function () { throw new RuntimeError('Variable "list_content" does not exist.', 8, $this->source); })()))) {
                // line 9
                yield "      <div>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("No tables found in database."), "html", null, true);
                yield "</div>
    ";
            }
            // line 11
            yield "  ";
        }
        // line 12
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "navigation/tree/path.twig";
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
        return array (  73 => 12,  70 => 11,  64 => 9,  62 => 8,  57 => 7,  55 => 6,  49 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class='list_container hide'>
  <ul{{ has_search_results ? ' class=\"search_results\"' }}>
    {{ list_content|raw }}
  </ul>

  {% if not is_tree %}
    <span class='hide loaded_db'>{{ parent_name|url_encode }}</span>
    {% if list_content is empty %}
      <div>{{ t('No tables found in database.') }}</div>
    {% endif %}
  {% endif %}
</div>
", "navigation/tree/path.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/navigation/tree/path.twig");
    }
}
