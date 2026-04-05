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

/* server/privileges/get_user_link.twig */
class __TwigTemplate_861382ff0f80be2b972238a6296fde44 extends Template
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
        yield "<a
  ";
        // line 2
        if ((($tmp =  !((isset($context["link_class"]) || array_key_exists("link_class", $context) ? $context["link_class"] : (function () { throw new RuntimeError('Variable "link_class" does not exist.', 2, $this->source); })()) === "")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 3
            yield "    class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["link_class"]) || array_key_exists("link_class", $context) ? $context["link_class"] : (function () { throw new RuntimeError('Variable "link_class" does not exist.', 3, $this->source); })()), "html", null, true);
            yield "\"
  ";
        }
        // line 5
        yield "  href=\"";
        yield PhpMyAdmin\Url::getFromRoute("/server/privileges", (((($tmp = (isset($context["is_revoke"]) || array_key_exists("is_revoke", $context) ? $context["is_revoke"] : (function () { throw new RuntimeError('Variable "is_revoke" does not exist.', 5, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ([]) : ((isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 5, $this->source); })()))));
        yield "\"
  ";
        // line 6
        if ((($tmp = (isset($context["is_revoke"]) || array_key_exists("is_revoke", $context) ? $context["is_revoke"] : (function () { throw new RuntimeError('Variable "is_revoke" does not exist.', 6, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 7
            yield "    data-post=\"";
            yield PhpMyAdmin\Url::getCommon((isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 7, $this->source); })()), "");
            yield "\"
  ";
        }
        // line 9
        yield ">
  ";
        // line 10
        yield PhpMyAdmin\Html\Generator::getIcon(CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 10, $this->source); })()), "icon", [], "any", false, false, false, 10), CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 10, $this->source); })()), "text", [], "any", false, false, false, 10));
        yield "
</a>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "server/privileges/get_user_link.twig";
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
        return array (  69 => 10,  66 => 9,  60 => 7,  58 => 6,  53 => 5,  47 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<a
  {% if link_class is not same as ('') %}
    class=\"{{ link_class }}\"
  {% endif %}
  href=\"{{ url('/server/privileges', is_revoke ? [] : url_params) }}\"
  {% if is_revoke %}
    data-post=\"{{ get_common(url_params, '') }}\"
  {% endif %}
>
  {{ get_icon(action.icon, action.text) }}
</a>
", "server/privileges/get_user_link.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/server/privileges/get_user_link.twig");
    }
}
