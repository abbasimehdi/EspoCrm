{{#if lineThrough}}<s>{{/if}}
{{#unless isErased}}
<a
    href="tel:{{valueForLink}}"
    data-phone-number="{{valueForLink}}"
    data-action="dial"
    title="{{value}}"
>
{{/unless}}{{value}}
{{#unless isErased}}</a>{{/unless}}
{{#if lineThrough}}</s>{{/if}}
