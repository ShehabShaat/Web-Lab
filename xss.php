<html>
<head>
<title>xss.php</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
.s0 { color: #e8bf6a;}
.s1 { color: #a9b7c6;}
.s2 { color: #bababa;}
.s3 { color: #6897bb;}
.s4 { color: #a5c261;}
.s5 { color: #cc7832;}
.s6 { color: #cc7832;}
.s7 { color: #a9b7c6;}
.s8 { color: #9876aa;}
.s9 { color: #a9b7c6;}
.s10 { color: #6a8759;}
</style>
</head>
<body bgcolor="#2b2b2b">
<table CELLSPACING=0 CELLPADDING=5 COLS=1 WIDTH="100%" BGCOLOR="#606060" >
<tr><td><center>
<font face="Arial, Helvetica" color="#000000">
xss.php</font>
</center></td></tr></table>
<pre><span class="s0">&lt;!DOCTYPE </span><span class="s2">html</span><span class="s0">&gt;</span>
<span class="s0">&lt;html&gt;</span>
<span class="s0">&lt;head&gt;</span>
    <span class="s0">&lt;title&gt;</span><span class="s1">XSS Test</span><span class="s0">&lt;/title&gt;</span>
<span class="s0">&lt;/head&gt;</span>
<span class="s0">&lt;body&gt;</span>
<span class="s0">&lt;h1&gt;</span><span class="s1">XSS Test</span><span class="s0">&lt;/h1&gt;</span>
<span class="s0">&lt;!DOCTYPE </span><span class="s2">html</span><span class="s0">&gt;</span>
<span class="s0">&lt;html&gt;</span>
<span class="s0">&lt;head&gt;</span>
    <span class="s0">&lt;title&gt;</span><span class="s1">XSS Test</span><span class="s0">&lt;/title&gt;</span>
    <span class="s0">&lt;style&gt;</span>
        <span class="s0">input </span><span class="s1">{</span>
            <span class="s2">margin</span><span class="s1">: </span><span class="s3">5</span><span class="s4">px</span><span class="s5">;</span>
        <span class="s1">}</span>
    <span class="s0">&lt;/style&gt;</span>
<span class="s0">&lt;/head&gt;</span>
<span class="s0">&lt;body&gt;</span>
<span class="s0">&lt;h2&gt;</span><span class="s1">Please enter your first name:</span><span class="s0">&lt;/h2&gt;</span>
<span class="s0">&lt;form </span><span class="s2">action</span><span class="s4">=&quot;xss.php&quot; </span><span class="s2">method</span><span class="s4">= &quot;post&quot;</span><span class="s0">&gt;</span>
    <span class="s0">&lt;input </span><span class="s2">type</span><span class="s4">=&quot;text&quot; </span><span class="s2">name</span><span class="s4">=&quot;fname&quot;</span><span class="s0">&gt;&lt;br&gt;</span>
    <span class="s0">&lt;input </span><span class="s2">type</span><span class="s4">=&quot;submit&quot; </span><span class="s2">value</span><span class="s4">=&quot;Submit name&quot;</span><span class="s0">&gt;</span>
<span class="s0">&lt;/form&gt;</span>
<span class="s0">&lt;/body&gt;</span>
<span class="s0">&lt;/html&gt;</span>

<span class="s6">&lt;?php</span>
<span class="s8">$fname </span><span class="s7">=@</span><span class="s9">htmlspecialchars</span><span class="s7">(</span><span class="s8">$_POST</span><span class="s7">[</span><span class="s10">'fname'</span><span class="s7">])</span><span class="s6">;</span>
<span class="s6">echo </span><span class="s10">&quot;&lt;p&gt;Welcome, </span><span class="s8">$fname</span><span class="s10">&lt;/p&gt;</span><span class="s6">\n</span><span class="s10">&quot;</span><span class="s6">;</span>
<span class="s6">?&gt;</span>
<span class="s0">&lt;h2&gt;</span><span class="s1">This is the end of the test</span><span class="s0">&lt;/h2&gt;</span>
<span class="s0">&lt;/body&gt;</span>
<span class="s0">&lt;/html&gt;</span></pre>
</body>
</html>