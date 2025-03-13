export default {
    "*.php": [
        "vendor/bin/duster lint --dirty"
    ],
    "*.{js,vue}": [
        "npx eslint"
    ]
}
