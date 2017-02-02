<?php

require_once '../include/header.php';
require_once '../lib/Kendo/Autoload.php';

?>

<?php
    $editor = new \Kendo\UI\Editor('editor');

    // enable all tools
    $editor->addTool(
        "pdf"
    );
    $pdf = new \Kendo\UI\EditorPdf();
    $margin = new \Kendo\UI\EditorPdfMargin();
    $margin
        ->bottom(20)
        ->left(20)
        ->right(20)
        ->top(20);
    $pdf->margin($margin);
    $pdf->paperSize("a4");
    $editor
        ->attr('style', 'height:440px')
        ->stylesheets(["../content/web/editor/pdf-export-styles.css"])
        ->pdf($pdf)
        ->startContent();
?>
    &lt;p&gt;&lt;img src=&quot;../content/web/editor/kendo-ui-web.png&quot; alt=&quot;Editor for PHP logo&quot; style=&quot;display:block;margin-left:auto;margin-right:auto;&quot; /&gt;&lt;/p&gt;
    &lt;p&gt;
        Kendo UI Editor allows your users to edit HTML in a familiar, user-friendly way.&lt;br /&gt;
        In this version, the Editor provides the core HTML editing engine, which includes basic text formatting, hyperlinks, lists,
        and image handling. The widget &lt;strong&gt;outputs identical HTML&lt;/strong&gt; across all major browsers, follows
        accessibility standards and provides API for content manipulation.
    &lt;/p&gt;
    &lt;p&gt;Features include:&lt;/p&gt;
    &lt;ul&gt;
        &lt;li&gt;Text formatting &amp; alignment&lt;/li&gt;
        &lt;li&gt;Bulleted and numbered lists&lt;/li&gt;
        &lt;li&gt;Hyperlink and image dialogs&lt;/li&gt;
        &lt;li&gt;Cross-browser support&lt;/li&gt;
        &lt;li&gt;Identical HTML output across browsers&lt;/li&gt;
        &lt;li&gt;Gracefully degrades to a &lt;code&gt;textarea&lt;/code&gt; when JavaScript is turned off&lt;/li&gt;
    &lt;/ul&gt;
    &lt;p&gt;
        Read &lt;a href=&quot;http://docs.telerik.com/kendo-ui&quot;&gt;more details&lt;/a&gt; or send us your
        &lt;a href=&quot;http://www.telerik.com/forums&quot;&gt;feedback&lt;/a&gt;!
    &lt;/p&gt;
    Nunc tincidunt erat lorem, ut pretium ipsum faucibus sed. Aenean arcu urna, porta a nulla interdum, mattis auctor sem. Etiam fermentum cursus sapien, vitae facilisis ipsum placerat eget. In ultrices laoreet felis, quis rhoncus nulla posuere et. Aenean quis porta magna. Quisque ut consectetur nulla. Sed nisi elit, eleifend sed pellentesque ut, sagittis quis eros.
    Nullam laoreet convallis augue, a viverra nisi tincidunt ac. Nunc vel commodo sem. In hac habitasse platea dictumst. Mauris ornare ante vulputate molestie dictum. Phasellus nunc sem, consectetur eget risus ac, venenatis consequat massa. Aliquam facilisis vitae turpis quis vehicula. Vivamus ullamcorper elementum vestibulum. Vivamus interdum urna eu enim mollis, nec venenatis risus cursus. Fusce vulputate elit felis, non vestibulum mauris hendrerit sed. Aenean tincidunt sem at mi sollicitudin malesuada. Cras suscipit enim nec commodo lacinia.
    Praesent eu magna condimentum, elementum augue eu, molestie metus. Ut turpis nisl, aliquam ut mauris a, blandit cursus nisi. Aliquam erat volutpat. Cras vehicula lacinia risus in lobortis. Mauris eu urna vitae mi pretium scelerisque. Praesent finibus arcu nulla, ac rhoncus enim pretium in. Cras dictum arcu ac pulvinar feugiat. Fusce euismod lacus nec orci gravida, vitae sodales lorem cursus. Nam tempus luctus ullamcorper.
    Ut sem diam, sodales eu risus et, varius condimentum est. Maecenas id malesuada justo, eget accumsan purus. Vivamus at magna ultricies, hendrerit nisl sed, tincidunt sem. Mauris congue posuere tempus. In hac habitasse platea dictumst. Integer ultrices nec magna a dapibus. Morbi eget fringilla erat. Maecenas nec turpis non est malesuada tincidunt. Curabitur pharetra, ante imperdiet pulvinar varius, nibh lorem porta nisi, sit amet euismod est nulla at dolor. Nam maximus mauris sagittis, mattis orci molestie, ultricies purus. Maecenas pellentesque magna ac facilisis faucibus. Nam euismod lectus non placerat faucibus. Proin et felis tincidunt, laoreet leo ut, ornare justo. Sed eget consequat augue. Nullam luctus nunc sed est suscipit, convallis interdum mauris consectetur.
    Fusce commodo commodo commodo. Aliquam erat volutpat. Fusce tempus sapien ac consequat pretium. Vivamus blandit lectus at facilisis porttitor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi sit amet enim nibh. Nam a scelerisque erat. Praesent id leo massa. Phasellus euismod lectus vel neque bibendum mollis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec non aliquet leo, vel facilisis quam. Phasellus volutpat tempor purus id feugiat. Proin quis feugiat dui, ac luctus massa. Quisque sagittis risus at dolor cursus ultrices.
    Pellentesque enim erat, pellentesque vel urna pretium, scelerisque vestibulum ligula. Cras viverra, mauris vitae pulvinar molestie, tortor ante interdum sem, quis facilisis nulla odio eu felis. Donec porta sagittis lorem, eget lacinia massa. Proin et augue eget eros aliquam lacinia. Sed libero est, laoreet ullamcorper luctus eget, dictum id ligula. Cras eget metus a erat eleifend interdum semper sed metus. Aliquam tristique magna at arcu lobortis, at ullamcorper ex mollis. Sed dictum est sit amet laoreet tristique. Sed ultricies sit amet dui id suscipit.
    Nullam risus erat, consectetur et risus tempus, convallis lobortis nunc. Nullam et dictum odio. Proin ut lacinia turpis. Proin tincidunt eros eget lorem dictum, ut accumsan elit fermentum. Suspendisse congue aliquet ex. Pellentesque convallis risus a orci laoreet, sed venenatis massa bibendum. Quisque sodales leo ipsum, eu tempus nunc dapibus ut. Vivamus turpis risus, ultricies cursus tellus a, tempus consequat tellus.
    Etiam nec lobortis orci, sit amet iaculis velit. Nam iaculis, erat eget volutpat dictum, enim lorem condimentum orci, ut aliquam turpis orci id erat. Aenean quis fringilla purus, sed porttitor purus. Nullam vel ultricies leo, ac commodo lorem. Cras non ex tempor, molestie sapien id, imperdiet ante. Nulla vestibulum faucibus commodo. Praesent gravida sem nec magna dignissim pellentesque. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam a nisl ac enim mattis aliquam et a erat. Quisque sed arcu sit amet dui ornare vehicula in ac odio. Quisque mollis ultricies nibh, nec auctor sapien. Morbi vitae accumsan nulla, quis bibendum lorem.
    Cras eu rhoncus lectus, ac auctor augue. Nulla eget dui ac metus pretium semper nec a odio. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed nisl nibh, imperdiet id leo et, faucibus laoreet dolor. Cras a dictum elit. Nunc eu ante vulputate, tempor ante quis, pretium elit. Morbi at ex id dolor tincidunt dignissim. Nunc vulputate eu ante eu hendrerit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
<?php
    $editor->endContent();

    echo $editor->render();
?>

<?php require_once '../include/footer.php'; ?>

