import './index.css';
// Uncomment to use Prism.
//import Prism from 'prismjs';

wp.blocks.registerBlockVariation( 'core/columns', {
	name: 'unicorn',
	title: 'Unicorn',
	isDefault: true,
	attributes: {
		className: 'unicorn-columns',
	},
	icon: 'buddicons-activity',
	scope: [ 'inserter' ],
	innerBlocks: [
		[
			'core/column',
			{},
			[
				[
					'core/heading',
					{
						level: 3,
						content: 'Column 1 Heading',
					},
				],
				[
					'core/paragraph',
					{
						content:
							'Lorem ipsum dolor sit amet id erat aliquet diam ullamcorper tempus massa eleifend vivamus.',
					},
				],
			],
		],
		[
			'core/column',
			{},
			[
				[
					'core/heading',
					{
						level: 3,
						content: 'Column 2 Heading',
					},
				],
				[
					'core/paragraph',
					{
						content:
							'Morbi augue cursus quam pulvinar eget volutpat suspendisse dictumst mattis id.',
					},
				],
			],
		],
	],
} );

wp.blocks.registerBlockVariation( 'core/cover', {
	name: 'dogs',
	title: 'Dogs',
	isDefault: true,
	attributes: {
		className: 'dog-hero',
		align: 'full',
		contentAlign: 'left',
		backgroundType: 'image',
		url: 'https://jcnextjs.local/wp-content/uploads/2021/04/hero.jpg',
	},
	icon: 'carrot',
	innerBlocks: [
		[
			'core/heading',
			{
				level: 1,
				content: 'They’re good dogs, Brent',
			},
		],
		[
			'core/paragraph',
			{
				content:
					'The only Legit Source for Professional Dog Ratings on the web.',
			},
		],
		[
			'core/button',
			{
				text: 'Get your rating',
				backgroundColor: 'vivid-cyan-blue',
				textColor: 'white',
				url: '#',
			},
		],
		[
			'core/button',
			{
				text: 'Dispute a rating',
				className: 'is-style-outline',
				textColor: 'white',
				url: '#',
			},
		],
	],
} );

wp.blocks.registerBlockVariation( 'core/heading', {
	name: 'green-text',
	title: 'Green Text',
	description: 'This block has green text.',
	attributes: {
		content: 'Green Text',
		level: 1,
		textColor: 'vivid-green-cyan',
	},
	icon: 'palmtree',
	scope: [ 'inserter' ],
} );
