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

/* server/user_groups/user_listings.twig */
class __TwigTemplate_790eba72090e25c11e611a24dde87209 extends Template
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
        yield "<h2>";
        yield Twig\Extension\CoreExtension::sprintf(\_gettext("Users of '%s' user group"), (isset($context["user_group_special_chars"]) || array_key_exists("user_group_special_chars", $context) ? $context["user_group_special_chars"] : (function () { throw new RuntimeError('Variable "user_group_special_chars" does not exist.', 1, $this->source); })()));
        yield "</h2>
";
        // line 2
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 2, $this->source); })())) == 0)) {
            // line 3
            yield "    <p>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("No users were found belonging to this user group."), "html", null, true);
            yield "</p>
";
        } else {
            // line 5
            yield "<table class=\"table table-striped w-auto\">
    <thead>
        <tr>
            <th>#</th>
            <th>";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("User"), "html", null, true);
            yield "</th>
        </tr>
    </thead>
    <tbody>
    ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 13, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
                // line 14
                yield "        <tr>
            <td>";
                // line 15
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["obj"], "count", [], "any", false, false, false, 15), "html", null, true);
                yield "</td>
            <td>";
                // line 16
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["obj"], "user", [], "any", false, false, false, 16), "html", null, true);
                yield "</td>
        </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['obj'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            yield "    </tbody>
</table>

";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "server/user_groups/user_listings.twig";
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
        return array (  88 => 19,  79 => 16,  75 => 15,  72 => 14,  68 => 13,  61 => 9,  55 => 5,  49 => 3,  47 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<h2>{{ t('Users of \\'%s\\' user group')|format(user_group_special_chars)|raw }}</h2>
{% if users|length == 0 %}
    <p>{{ t('No users were found belonging to this user group.') }}</p>
{% else %}
<table class=\"table table-striped w-auto\">
    <thead>
        <tr>
            <th>#</th>
            <th>{{ t('User') }}</th>
        </tr>
    </thead>
    <tbody>
    {% for obj in users %}
        <tr>
            <td>{{ obj.count }}</td>
            <td>{{ obj.user }}</td>
        </tr>
    {% endfor %}
    </tbody>
</table>

{% endif %}
", "server/user_groups/user_listings.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/server/user_groups/user_listings.twig");
    }
}
