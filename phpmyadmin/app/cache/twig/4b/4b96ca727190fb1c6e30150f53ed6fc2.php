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

/* server/collations/index.twig */
class __TwigTemplate_f1a68b28546796027706440b7ee5e642 extends Template
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
        yield "<div class=container-fluid>
  <h2>
    ";
        // line 3
        yield PhpMyAdmin\Html\Generator::getImage("s_asci");
        yield "
    ";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Character sets and collations"), "html", null, true);
        yield "
  </h2>

  ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["charsets"]) || array_key_exists("charsets", $context) ? $context["charsets"] : (function () { throw new RuntimeError('Variable "charsets" does not exist.', 7, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["charset"]) {
            // line 8
            yield "    <div class=\"card mb-3\">
      <div class=\"card-header\">
        <div><strong>";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "name", [], "any", false, false, false, 10), "html", null, true);
            yield "</strong></div>
        <div>";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "description", [], "any", false, false, false, 11), "html", null, true);
            yield "</div>
      </div>
      <ul class=\"list-group list-group-flush\">
        ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "collations", [], "any", false, false, false, 14));
            foreach ($context['_seq'] as $context["_key"] => $context["collation"]) {
                // line 15
                yield "          <li class=\"list-group-item\">
            <div class=\"row\">
              <div class=\"col\">
                <div><strong>";
                // line 18
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "name", [], "any", false, false, false, 18), "html", null, true);
                yield "</strong></div>
                <div>";
                // line 19
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "description", [], "any", false, false, false, 19), "html", null, true);
                yield "</div>
              </div>
              <div class=\"col align-self-center text-end\">
                ";
                // line 22
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "is_default", [], "any", false, false, false, 22)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 23
                    yield "                  <span class=\"badge bg-secondary\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("The collation is the default one", "default"), "html", null, true);
                    yield "</span>
                ";
                }
                // line 25
                yield "              </div>
            </div>
          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['collation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            yield "      </ul>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['charset'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "server/collations/index.twig";
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
        return array (  118 => 32,  110 => 29,  101 => 25,  95 => 23,  93 => 22,  87 => 19,  83 => 18,  78 => 15,  74 => 14,  68 => 11,  64 => 10,  60 => 8,  56 => 7,  50 => 4,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=container-fluid>
  <h2>
    {{ get_image('s_asci') }}
    {{ t('Character sets and collations') }}
  </h2>

  {% for charset in charsets %}
    <div class=\"card mb-3\">
      <div class=\"card-header\">
        <div><strong>{{ charset.name }}</strong></div>
        <div>{{ charset.description }}</div>
      </div>
      <ul class=\"list-group list-group-flush\">
        {% for collation in charset.collations %}
          <li class=\"list-group-item\">
            <div class=\"row\">
              <div class=\"col\">
                <div><strong>{{ collation.name }}</strong></div>
                <div>{{ collation.description }}</div>
              </div>
              <div class=\"col align-self-center text-end\">
                {% if collation.is_default %}
                  <span class=\"badge bg-secondary\">{{ t('default', context = 'The collation is the default one') }}</span>
                {% endif %}
              </div>
            </div>
          </li>
        {% endfor %}
      </ul>
    </div>
  {% endfor %}
</div>
", "server/collations/index.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/server/collations/index.twig");
    }
}
