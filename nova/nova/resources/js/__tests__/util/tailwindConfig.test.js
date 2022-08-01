import {
  generateRootCSSVars,
  generateTailwindColors,
} from '../../../../generators'

it('generates Tailwind colors', () => {
  expect(generateTailwindColors()).toEqual(
    expect.objectContaining({
      current: 'currentColor',
      inherit: 'inherit',
      transparent: 'transparent',
      black: '#000',
      white: '#fff',
      primary: {
        100: 'rgba(var(--colors-primary-100), <alpha-value>)',
        200: 'rgba(var(--colors-primary-200), <alpha-value>)',
        300: 'rgba(var(--colors-primary-300), <alpha-value>)',
        400: 'rgba(var(--colors-primary-400), <alpha-value>)',
        50: 'rgba(var(--colors-primary-50), <alpha-value>)',
        500: 'rgba(var(--colors-primary-500), <alpha-value>)',
        600: 'rgba(var(--colors-primary-600), <alpha-value>)',
        700: 'rgba(var(--colors-primary-700), <alpha-value>)',
        800: 'rgba(var(--colors-primary-800), <alpha-value>)',
        900: 'rgba(var(--colors-primary-900), <alpha-value>)',
      },
    })
  )
})

it('generates root CSS variables', () => {
  expect(generateRootCSSVars()).toEqual(
    expect.objectContaining({
      '--colors-primary-50': '240, 249, 255',
      '--colors-primary-100': '224, 242, 254',
      '--colors-primary-200': '186, 230, 253',
      '--colors-primary-300': '125, 211, 252',
      '--colors-primary-400': '56, 189, 248',
      '--colors-primary-500': '14, 165, 233',
      '--colors-primary-600': '2, 132, 199',
      '--colors-primary-700': '3, 105, 161',
      '--colors-primary-800': '7, 89, 133',
      '--colors-primary-900': '12, 74, 110',
    })
  )

  expect(generateRootCSSVars()).toEqual(
    expect.not.objectContaining({
      '--colors-inherit': 'inherit',
      '--colors-current': 'current',
      '--colors-transparent': 'transparent',
    })
  )
})
