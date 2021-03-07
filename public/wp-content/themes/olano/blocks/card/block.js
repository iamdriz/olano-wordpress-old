(function (blocks, element, blockEditor) {
    var el = element.createElement;
    var InnerBlocks = blockEditor.InnerBlocks;

    console.log('loaded card block');

    blocks.registerBlockType('olano/olano-card-block', {
        title: 'Olano: Card Block',
        icon: 'universal-access-alt',
        category: 'layout',
        example: {},
        edit: function (props) {
            return el('div', { className: 'card' },
                    el(InnerBlocks)
            );
        },
        save: function (props) {
            return el('div', { className: 'card' },
                    el(InnerBlocks.Content)
            );
        },
    });
})(window.wp.blocks, window.wp.element, window.wp.blockEditor);