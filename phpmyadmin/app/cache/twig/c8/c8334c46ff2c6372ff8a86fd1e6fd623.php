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

/* navigation/tree/fast_filter.twig */
class __TwigTemplate_f625d988ed1699c5d43c807bfe420cec extends Template
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
        if ((($tmp = (isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 1, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 2
            yield "    <li class=\"fast_filter";
            if ((($tmp = (isset($context["is_root_node"]) || array_key_exists("is_root_node", $context) ? $context["is_root_node"] : (function () { throw new RuntimeError('Variable "is_root_node" does not exist.', 2, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " db_fast_filter";
            }
            yield "\">
        <form class=\"ajax fast_filter\">
            ";
            // line 4
            yield PhpMyAdmin\Url::getHiddenInputs((isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 4, $this->source); })()));
            yield "
            <div class=\"input-group\">
              <input
                  class=\"searchClause form-control\"
                  type=\"text\"
                  name=\"";
            // line 9
            yield (((($tmp = (isset($context["is_root_node"]) || array_key_exists("is_root_node", $context) ? $context["is_root_node"] : (function () { throw new RuntimeError('Variable "is_root_node" does not exist.', 9, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("searchClause") : ("searchClause2"));
            yield "\"
                  accesskey=\"q\"
                  aria-label=\"";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Type to filter these, Enter to search all"), "html", null, true);
            yield "\"
                  placeholder=\"";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Type to filter these, Enter to search all"), "html", null, true);
            yield "\"
              >
              <button
                class=\"btn btn-outline-secondary searchClauseClear\"
                type=\"button\" aria-label=\"";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Clear fast filter"), "html", null, true);
            yield "\">X</button>
            </div>
        </form>
    </li>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "navigation/tree/fast_filter.twig";
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
        return array (  76 => 16,  69 => 12,  65 => 11,  60 => 9,  52 => 4,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if url_params %}
    <li class=\"fast_filter{% if is_root_node %} db_fast_filter{% endif %}\">
        <form class=\"ajax fast_filter\">
            {{ get_hidden_inputs(url_params) }}
            <div class=\"input-group\">
              <input
                  class=\"searchClause form-control\"
                  type=\"text\"
                  name=\"{{ is_root_node ? 'searchClause' : 'searchClause2' }}\"
                  accesskey=\"q\"
                  aria-label=\"{{ t('Type to filter these, Enter to search all') }}\"
                  placeholder=\"{{ t('Type to filter these, Enter to search all') }}\"
              >
              <button
                class=\"btn btn-outline-secondary searchClauseClear\"
                type=\"button\" aria-label=\"{{ t('Clear fast filter') }}\">X</button>
            </div>
        </form>
    </li>
{% endif %}
", "navigation/tree/fast_filter.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/navigation/tree/fast_filter.twig");
    }
}
