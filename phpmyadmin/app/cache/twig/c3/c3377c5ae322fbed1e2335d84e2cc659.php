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

/* navigation/tree/database_select.twig */
class __TwigTemplate_3d6c7852134264d222ad3b88525826a3 extends Template
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
        yield (isset($context["quick_warp"]) || array_key_exists("quick_warp", $context) ? $context["quick_warp"] : (function () { throw new RuntimeError('Variable "quick_warp" does not exist.', 1, $this->source); })());
        yield "

<div id=\"pma_navigation_select_database\">
  ";
        // line 4
        yield (isset($context["list_navigator"]) || array_key_exists("list_navigator", $context) ? $context["list_navigator"] : (function () { throw new RuntimeError('Variable "list_navigator" does not exist.', 4, $this->source); })());
        yield "

  <div id=\"pma_navigation_db_select\">
    <form action=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["database_url"]) || array_key_exists("database_url", $context) ? $context["database_url"] : (function () { throw new RuntimeError('Variable "database_url" does not exist.', 7, $this->source); })()), "html", null, true);
        yield "\" method=\"get\">
      ";
        // line 8
        yield PhpMyAdmin\Url::getHiddenFields(["server" => (isset($context["server"]) || array_key_exists("server", $context) ? $context["server"] : (function () { throw new RuntimeError('Variable "server" does not exist.', 8, $this->source); })())]);
        yield "

      <select name=\"db\" class=\"hide\" id=\"navi_db_select\" aria-label=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Databases"), "html", null, true);
        yield "\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 12
            yield "          <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 12), "html", null, true);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "title", [], "any", false, false, false, 12), "html", null, true);
            yield "\"
            data-apath=\"";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["option"], "data", [], "any", false, false, false, 13), "apath", [], "any", false, false, false, 13), "html", null, true);
            yield "\"
            data-vpath=\"";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["option"], "data", [], "any", false, false, false, 14), "vpath", [], "any", false, false, false, 14), "html", null, true);
            yield "\"
            data-pos=\"";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["option"], "data", [], "any", false, false, false, 15), "pos", [], "any", false, false, false, 15), "html", null, true);
            yield "\"
            ";
            // line 16
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["option"], "isSelected", [], "any", false, false, false, 16)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" selected") : (""));
            yield ">";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 17), "html", null, true);
            // line 18
            yield "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        yield "      </select>
    </form>
  </div>
</div>

<div id=\"pma_navigation_tree_content\">
  <ul>
    ";
        // line 27
        yield (isset($context["nodes"]) || array_key_exists("nodes", $context) ? $context["nodes"] : (function () { throw new RuntimeError('Variable "nodes" does not exist.', 27, $this->source); })());
        yield "
  </ul>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "navigation/tree/database_select.twig";
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
        return array (  111 => 27,  102 => 20,  95 => 18,  93 => 17,  90 => 16,  86 => 15,  82 => 14,  78 => 13,  71 => 12,  67 => 11,  63 => 10,  58 => 8,  54 => 7,  48 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ quick_warp|raw }}

<div id=\"pma_navigation_select_database\">
  {{ list_navigator|raw }}

  <div id=\"pma_navigation_db_select\">
    <form action=\"{{ database_url }}\" method=\"get\">
      {{ get_hidden_fields({'server': server}) }}

      <select name=\"db\" class=\"hide\" id=\"navi_db_select\" aria-label=\"{{ t('Databases') }}\">
        {% for option in options %}
          <option value=\"{{ option.name }}\" title=\"{{ option.title }}\"
            data-apath=\"{{ option.data.apath }}\"
            data-vpath=\"{{ option.data.vpath }}\"
            data-pos=\"{{ option.data.pos }}\"
            {{ option.isSelected ? \" selected\" : \"\" }}>
              {{- option.name -}}
            </option>
        {% endfor %}
      </select>
    </form>
  </div>
</div>

<div id=\"pma_navigation_tree_content\">
  <ul>
    {{ nodes|raw }}
  </ul>
</div>
", "navigation/tree/database_select.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/navigation/tree/database_select.twig");
    }
}
