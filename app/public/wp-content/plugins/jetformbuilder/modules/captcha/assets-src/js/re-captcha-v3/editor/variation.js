const {
	      __,
      } = wp.i18n;

const variation = {
	name: 'google',
	title: __( 'reCaptcha', 'jet-form-builder' ),
	isActive: ( blockAttributes, variationAttributes ) => (
		blockAttributes.provider === variationAttributes.provider
	),
	description: __(
		`Set the reCaptcha settings in the Captcha Container block 
to enable web hosts to distinguish between human and automated website access.`,
		'jet-form-builder',
	),
	icon: <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path d="M50.9219 43.871C51.2755 43.4467 51.2181 42.8161 50.7939 42.4625C50.3696 42.109 49.739 42.1663 49.3854 42.5906L44.8942 47.9801L42.8992 45.9852C42.5087 45.5947 41.8755 45.5947 41.485 45.9852C41.0945 46.3757 41.0945 47.0089 41.485 47.3994L43.8671 49.7815C44.4908 50.4052 45.5154 50.3587 46.0801 49.6811L50.9219 43.871Z" fill="currentColor"/>
		<path fillRule="evenodd" clipRule="evenodd" d="M31.3934 20.9546C35.1005 20.9087 39.1075 23.2 41.0897 26.311L36.6899 30.7108C36.0599 31.3408 36.5061 32.4179 37.397 32.4179H54.0255C54.5778 32.4179 55.0255 31.9702 55.0255 31.4179V14.7917C55.0255 13.9007 53.9484 13.4546 53.3184 14.0845L49.7621 17.6409C45.4542 12.3679 38.9009 9 31.5606 9C25.6407 9 19.7134 9.0244 13.7914 9.02503C12.9005 9.02512 12.4543 10.1023 13.0843 10.7322L16.6407 14.2886C14.0776 16.3825 8.00073 22.5 8.00073 32.4911C8.02024 38.3671 8.02476 44.2444 8.02476 50.121C8.02476 51.0119 9.1019 51.4581 9.73186 50.8281L13.2882 47.2718C19.4998 55 30.8842 58.0108 40.288 54.2093C41.9073 55.3381 43.8762 56 45.9997 56C51.5226 56 55.9997 51.5229 55.9997 46C55.9997 40.4772 51.5226 36 45.9997 36C41.6072 36 37.8761 38.8321 36.5329 42.77C31.4133 45.314 25.0427 43.4389 21.9606 38.6017L26.3509 34.2114C26.9822 33.5801 26.5329 32.5006 25.6401 32.5037C23.737 32.5102 21.8125 32.5155 19.9533 32.519C19.945 28.7424 22.1595 24.9689 25.3107 22.961L29.701 27.3513C30.3323 27.9826 31.4118 27.5333 31.4087 26.6405C31.4022 24.7377 31.3969 22.8135 31.3934 20.9546ZM53.0255 17.2059L49.6124 20.6189C44.5338 14.4024 38.9998 11.0072 31.4037 11.0072C31.3902 13.0876 31.3871 15.8664 31.3905 18.9545C36.7567 18.8957 40.9998 22 43.639 26.5901L39.8112 30.4179H53.0255V17.2059ZM19.6187 14.4382L16.205 11.0246C20.6037 11.0233 25.0036 11.0193 29.4035 11.0072C29.3828 14.2398 29.3869 19.182 29.4012 24.223L25.5898 20.4117C21.4998 22 17.9533 27.5 17.9533 32.5219L9.99976 32.5088C9.99366 24.909 13.9998 18.5 19.6187 14.4382ZM36.0348 45.1567C35.8057 47.9002 36.7368 50.6706 38.5879 52.7131C29.0923 56.0344 18.4998 52 13.4378 44.2937L10.0248 47.7068V34.509C13.2609 34.5295 18.1944 34.5255 23.2226 34.5112L19.4113 38.3226C21.9998 44 29.4201 47.5654 36.0348 45.1567ZM45.9997 38C41.5815 38 37.9998 41.5817 37.9998 46C37.9998 50.4183 41.5815 54 45.9997 54C50.418 54 53.9997 50.4183 53.9997 46C53.9997 41.5817 50.418 38 45.9997 38Z" fill="currentColor"/>
	</svg>,
	scope: [ 'block', 'inserter' ],
	attributes: {
		provider: 'google',
	},
};

export default variation;