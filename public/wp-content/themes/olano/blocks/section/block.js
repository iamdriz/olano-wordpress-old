(function (blocks, i18n, element, blockEditor) {
    var el = element.createElement;
    var InnerBlocks = blockEditor.InnerBlocks;
    var __ = i18n.__;

    console.log('loaded olano section block');

    blocks.registerBlockType('olano/olano-section-block', {
        title: 'Olano: Section Block',
        icon: 'universal-access-alt',
        category: 'layout',
        example: {},
        edit: function (props) {
            // return el(
            // 	'p',
            // 	{ style: blockStyle },
            // 	'Hello World, step 1 (from the editor).'
            // );
            return el(
                'section', { className: 'section ' + props.className },
                el('div', { className: 'container margin-x-auto' },
                    el(InnerBlocks))
            );
        },
        save: function (props) {
            // return el(
            // 	'p',
            // 	{ style: blockStyle },
            // 	'Hello World, step 1 (from the frontend).'
            // );
            return el(
                'section', { className: 'section ' + props.className },
                el('div', { className: 'container margin-x-auto' },
                    el(InnerBlocks.Content))
            );
        },
    });
})(window.wp.blocks, window.wp.i18n, window.wp.element, window.wp.blockEditor);