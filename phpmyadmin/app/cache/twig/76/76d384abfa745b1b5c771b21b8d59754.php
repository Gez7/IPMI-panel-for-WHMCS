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

/* server/engines/_innodb_buffer_pool.twig */
class __TwigTemplate_aedf320148c2bd6ebd34f571cd053cdf extends Template
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
        yield "<table class=\"table table-striped table-hover w-auto float-start caption-top\">
  <caption>";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Buffer pool usage"), "html", null, true);
        yield "</caption>
  <tbody>
    <tr>
      <th scope=\"row\">";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Free pages"), "html", null, true);
        yield "</th>
      <td class=\"font-monospace text-end\">";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(PhpMyAdmin\Util::formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["buffer_pool"]) || array_key_exists("buffer_pool", $context) ? $context["buffer_pool"] : (function () { throw new RuntimeError('Variable "buffer_pool" does not exist.', 6, $this->source); })()), "pagesFree", [], "any", false, false, false, 6), 0), "html", null, true);
        yield "</td>
    </tr>
    <tr>
      <th scope=\"row\">";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Dirty pages"), "html", null, true);
        yield "</th>
      <td class=\"font-monospace text-end\">";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(PhpMyAdmin\Util::formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["buffer_pool"]) || array_key_exists("buffer_pool", $context) ? $context["buffer_pool"] : (function () { throw new RuntimeError('Variable "buffer_pool" does not exist.', 10, $this->source); })()), "pagesDirty", [], "any", false, false, false, 10), 0), "html", null, true);
        yield "</td>
    </tr>
    <tr>
      <th scope=\"row\">";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Pages containing data"), "html", null, true);
        yield "</th>
      <td class=\"font-monospace text-end\">";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(PhpMyAdmin\Util::formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["buffer_pool"]) || array_key_exists("buffer_pool", $context) ? $context["buffer_pool"] : (function () { throw new RuntimeError('Variable "buffer_pool" does not exist.', 14, $this->source); })()), "pagesData", [], "any", false, false, false, 14), 0), "html", null, true);
        yield "</td>
    </tr>
    <tr>
      <th scope=\"row\">";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Pages to be flushed"), "html", null, true);
        yield "</th>
      <td class=\"font-monospace text-end\">";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(PhpMyAdmin\Util::formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["buffer_pool"]) || array_key_exists("buffer_pool", $context) ? $context["buffer_pool"] : (function () { throw new RuntimeError('Variable "buffer_pool" does not exist.', 18, $this->source); })()), "pagesFlushed", [], "any", false, false, false, 18), 0), "html", null, true);
        yield "</td>
    </tr>
    <tr>
      <th scope=\"row\">";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Busy pages"), "html", null, true);
        yield "</th>
      <td class=\"font-monospace text-end\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(PhpMyAdmin\Util::formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["buffer_pool"]) || array_key_exists("buffer_pool", $context) ? $context["buffer_pool"] : (function () { throw new RuntimeError('Variable "buffer_pool" does not exist.', 22, $this->source); })()), "pagesMisc", [], "any", false, false, false, 22), 0), "html", null, true);
        yield "</td>
    </tr>
";
        // line 24
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["buffer_pool"]) || array_key_exists("buffer_pool", $context) ? $context["buffer_pool"] : (function () { throw new RuntimeError('Variable "buffer_pool" does not exist.', 24, $this->source); })()), "pagesLatched", [], "any", false, false, false, 24) != null)) {
            // line 25
            yield "    <tr>
      <th scope=\"row\">";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Latched pages"), "html", null, true);
            yield "</th>
      <td class=\"font-monospace text-end\">";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(PhpMyAdmin\Util::formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["buffer_pool"]) || array_key_exists("buffer_pool", $context) ? $context["buffer_pool"] : (function () { throw new RuntimeError('Variable "buffer_pool" does not exist.', 27, $this->source); })()), "pagesLatched", [], "any", false, false, false, 27), 0), "html", null, true);
            yield "</td>
    </tr>
";
        }
        // line 30
        yield "  </tbody>
  <tfoot>
    <tr>
      <th colspan=\"2\">
        ";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Total:"), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(\_gettext("%s pages"), PhpMyAdmin\Util::formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["buffer_pool"]) || array_key_exists("buffer_pool", $context) ? $context["buffer_pool"] : (function () { throw new RuntimeError('Variable "buffer_pool" does not exist.', 34, $this->source); })()), "pagesTotal", [], "any", false, false, false, 34), 0)), "html", null, true);
        yield " / ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(PhpMyAdmin\Util::formatByteDown((CoreExtension::getAttribute($this->env, $this->source, (isset($context["buffer_pool"]) || array_key_exists("buffer_pool", $context) ? $context["buffer_pool"] : (function () { throw new RuntimeError('Variable "buffer_pool" does not exist.', 34, $this->source); })()), "pagesTotal", [], "any", false, false, false, 34) * CoreExtension::getAttribute($this->env, $this->source, (isset($context["buffer_pool"]) || array_key_exists("buffer_pool", $context) ? $context["buffer_pool"] : (function () { throw new RuntimeError('Variable "buffer_pool" does not exist.', 34, $this->source); })()), "innodbPageSize", [], "any", false, false, false, 34))), " "), "html", null, true);
        yield "
      </th>
    </tr>
  </tfoot>
</table>

<table class=\"table table-striped table-hover w-auto ms-4 float-start caption-top\">
  <caption>";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Buffer pool activity"), "html", null, true);
        yield "</caption>
  <tbody>
    <tr>
      <th scope=\"row\">";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Read requests"), "html", null, true);
        yield "</th>
      <td class=\"font-monospace text-end\">";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(PhpMyAdmin\Util::formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["buffer_pool"]) || array_key_exists("buffer_pool", $context) ? $context["buffer_pool"] : (function () { throw new RuntimeError('Variable "buffer_pool" does not exist.', 45, $this->source); })()), "readRequests", [], "any", false, false, false, 45), 0), "html", null, true);
        yield "</td>
    </tr>
    <tr>
      <th scope=\"row\">";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Write requests"), "html", null, true);
        yield "</th>
      <td class=\"font-monospace text-end\">";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(PhpMyAdmin\Util::formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["buffer_pool"]) || array_key_exists("buffer_pool", $context) ? $context["buffer_pool"] : (function () { throw new RuntimeError('Variable "buffer_pool" does not exist.', 49, $this->source); })()), "writeRequests", [], "any", false, false, false, 49), 0), "html", null, true);
        yield "</td>
    </tr>
    <tr>
      <th scope=\"row\">";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Read misses"), "html", null, true);
        yield "</th>
      <td class=\"font-monospace text-end\">";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(PhpMyAdmin\Util::formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["buffer_pool"]) || array_key_exists("buffer_pool", $context) ? $context["buffer_pool"] : (function () { throw new RuntimeError('Variable "buffer_pool" does not exist.', 53, $this->source); })()), "reads", [], "any", false, false, false, 53), 0), "html", null, true);
        yield "</td>
    </tr>
    <tr>
      <th scope=\"row\">";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Write waits"), "html", null, true);
        yield "</th>
      <td class=\"font-monospace text-end\">";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(PhpMyAdmin\Util::formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["buffer_pool"]) || array_key_exists("buffer_pool", $context) ? $context["buffer_pool"] : (function () { throw new RuntimeError('Variable "buffer_pool" does not exist.', 57, $this->source); })()), "waitFree", [], "any", false, false, false, 57), 0), "html", null, true);
        yield "</td>
    </tr>
    <tr>
      <th scope=\"row\">";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Read misses in %"), "html", null, true);
        yield "</th>
      <td class=\"font-monospace text-end\">";
        // line 62
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["buffer_pool"]) || array_key_exists("buffer_pool", $context) ? $context["buffer_pool"] : (function () { throw new RuntimeError('Variable "buffer_pool" does not exist.', 62, $this->source); })()), "readRequests", [], "any", false, false, false, 62) != 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((PhpMyAdmin\Util::formatNumber(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["buffer_pool"]) || array_key_exists("buffer_pool", $context) ? $context["buffer_pool"] : (function () { throw new RuntimeError('Variable "buffer_pool" does not exist.', 62, $this->source); })()), "reads", [], "any", false, false, false, 62) * 100) / CoreExtension::getAttribute($this->env, $this->source, (isset($context["buffer_pool"]) || array_key_exists("buffer_pool", $context) ? $context["buffer_pool"] : (function () { throw new RuntimeError('Variable "buffer_pool" does not exist.', 62, $this->source); })()), "readRequests", [], "any", false, false, false, 62)), 3, 2) . "%"), "html", null, true)) : ("---"));
        // line 63
        yield "</td>
    </tr>
    <tr>
      <th scope=\"row\">";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Write waits in %"), "html", null, true);
        yield "</th>
      <td class=\"font-monospace text-end\">";
        // line 68
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["buffer_pool"]) || array_key_exists("buffer_pool", $context) ? $context["buffer_pool"] : (function () { throw new RuntimeError('Variable "buffer_pool" does not exist.', 68, $this->source); })()), "writeRequests", [], "any", false, false, false, 68) != 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((PhpMyAdmin\Util::formatNumber(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["buffer_pool"]) || array_key_exists("buffer_pool", $context) ? $context["buffer_pool"] : (function () { throw new RuntimeError('Variable "buffer_pool" does not exist.', 68, $this->source); })()), "waitFree", [], "any", false, false, false, 68) * 100) / CoreExtension::getAttribute($this->env, $this->source, (isset($context["buffer_pool"]) || array_key_exists("buffer_pool", $context) ? $context["buffer_pool"] : (function () { throw new RuntimeError('Variable "buffer_pool" does not exist.', 68, $this->source); })()), "writeRequests", [], "any", false, false, false, 68)), 3, 2) . "%"), "html", null, true)) : ("---"));
        // line 69
        yield "</td>
    </tr>
  </tbody>
</table>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "server/engines/_innodb_buffer_pool.twig";
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
        return array (  198 => 69,  196 => 68,  192 => 66,  187 => 63,  185 => 62,  181 => 60,  175 => 57,  171 => 56,  165 => 53,  161 => 52,  155 => 49,  151 => 48,  145 => 45,  141 => 44,  135 => 41,  121 => 34,  115 => 30,  109 => 27,  105 => 26,  102 => 25,  100 => 24,  95 => 22,  91 => 21,  85 => 18,  81 => 17,  75 => 14,  71 => 13,  65 => 10,  61 => 9,  55 => 6,  51 => 5,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<table class=\"table table-striped table-hover w-auto float-start caption-top\">
  <caption>{{ t('Buffer pool usage') }}</caption>
  <tbody>
    <tr>
      <th scope=\"row\">{{ t('Free pages') }}</th>
      <td class=\"font-monospace text-end\">{{ format_number(buffer_pool.pagesFree, 0) }}</td>
    </tr>
    <tr>
      <th scope=\"row\">{{ t('Dirty pages') }}</th>
      <td class=\"font-monospace text-end\">{{ format_number(buffer_pool.pagesDirty, 0) }}</td>
    </tr>
    <tr>
      <th scope=\"row\">{{ t('Pages containing data') }}</th>
      <td class=\"font-monospace text-end\">{{ format_number(buffer_pool.pagesData, 0) }}</td>
    </tr>
    <tr>
      <th scope=\"row\">{{ t('Pages to be flushed') }}</th>
      <td class=\"font-monospace text-end\">{{ format_number(buffer_pool.pagesFlushed, 0) }}</td>
    </tr>
    <tr>
      <th scope=\"row\">{{ t('Busy pages') }}</th>
      <td class=\"font-monospace text-end\">{{ format_number(buffer_pool.pagesMisc, 0) }}</td>
    </tr>
{% if buffer_pool.pagesLatched != null %}
    <tr>
      <th scope=\"row\">{{ t('Latched pages') }}</th>
      <td class=\"font-monospace text-end\">{{ format_number(buffer_pool.pagesLatched, 0) }}</td>
    </tr>
{% endif %}
  </tbody>
  <tfoot>
    <tr>
      <th colspan=\"2\">
        {{ t('Total:') }} {{ t('%s pages')|format(format_number(buffer_pool.pagesTotal, 0)) }} / {{ format_byte_down(buffer_pool.pagesTotal * buffer_pool.innodbPageSize)|join(' ') }}
      </th>
    </tr>
  </tfoot>
</table>

<table class=\"table table-striped table-hover w-auto ms-4 float-start caption-top\">
  <caption>{{ t('Buffer pool activity') }}</caption>
  <tbody>
    <tr>
      <th scope=\"row\">{{ t('Read requests') }}</th>
      <td class=\"font-monospace text-end\">{{ format_number(buffer_pool.readRequests, 0) }}</td>
    </tr>
    <tr>
      <th scope=\"row\">{{ t('Write requests') }}</th>
      <td class=\"font-monospace text-end\">{{ format_number(buffer_pool.writeRequests, 0) }}</td>
    </tr>
    <tr>
      <th scope=\"row\">{{ t('Read misses') }}</th>
      <td class=\"font-monospace text-end\">{{ format_number(buffer_pool.reads, 0) }}</td>
    </tr>
    <tr>
      <th scope=\"row\">{{ t('Write waits') }}</th>
      <td class=\"font-monospace text-end\">{{ format_number(buffer_pool.waitFree, 0) }}</td>
    </tr>
    <tr>
      <th scope=\"row\">{{ t('Read misses in %') }}</th>
      <td class=\"font-monospace text-end\">
        {{- buffer_pool.readRequests != 0 ? format_number(buffer_pool.reads * 100 / buffer_pool.readRequests, 3, 2) ~ '%' : '---' -}}
      </td>
    </tr>
    <tr>
      <th scope=\"row\">{{ t('Write waits in %') }}</th>
      <td class=\"font-monospace text-end\">
        {{- buffer_pool.writeRequests != 0 ? format_number(buffer_pool.waitFree * 100 / buffer_pool.writeRequests, 3, 2) ~ '%' : '---' -}}
      </td>
    </tr>
  </tbody>
</table>
", "server/engines/_innodb_buffer_pool.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/server/engines/_innodb_buffer_pool.twig");
    }
}
