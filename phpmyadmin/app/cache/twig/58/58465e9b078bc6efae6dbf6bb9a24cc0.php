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

/* components/flash_messages.twig */
class __TwigTemplate_af6cdbd0705c1f38b8c37bb0e1c15699 extends Template
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
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($this->env->getRuntime('PhpMyAdmin\FlashMessenger')->getMessages());
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 2
            yield "  ";
            if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["flash_message"], "statement", [], "any", false, false, false, 2))) {
                // line 3
                yield "    <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["flash_message"], "context", [], "any", false, false, false, 3), "html", null, true);
                yield "\" role=\"alert\">
      ";
                // line 4
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["flash_message"], "message", [], "any", false, false, false, 4), "html", null, true);
                yield "
    </div>
  ";
            } else {
                // line 7
                yield "    ";
                yield PhpMyAdmin\Twig\MessageExtension::getStatementMessage(CoreExtension::getAttribute($this->env, $this->source, $context["flash_message"], "message", [], "any", false, false, false, 7), CoreExtension::getAttribute($this->env, $this->source, $context["flash_message"], "statement", [], "any", false, false, false, 7), CoreExtension::getAttribute($this->env, $this->source, $context["flash_message"], "context", [], "any", false, false, false, 7));
                yield "
  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['flash_message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/flash_messages.twig";
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
        return array (  60 => 7,  54 => 4,  49 => 3,  46 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% for flash_message in flash_messages() %}
  {% if flash_message.statement is empty %}
    <div class=\"alert alert-{{ flash_message.context }}\" role=\"alert\">
      {{ flash_message.message }}
    </div>
  {% else %}
    {{ statement_message(flash_message.message, flash_message.statement, flash_message.context) }}
  {% endif %}
{% endfor %}
", "components/flash_messages.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/components/flash_messages.twig");
    }
}
