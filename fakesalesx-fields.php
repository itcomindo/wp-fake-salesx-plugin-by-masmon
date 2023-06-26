<?php
defined('ABSPATH') || exit;

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'fakesalesx_register_fields');
function fakesalesx_register_fields()
{
    Container::make('theme_options', 'FakeSalesX')
        ->set_page_parent('options-general.php')
        ->add_fields([
            Field::make('checkbox', 'fakesalesx_enabledisable', 'Enable/Disable Fake Sales X')
                ->set_option_value('yes')
                ->set_default_value(false)
                ->set_help_text('Enable/Disable Fake Sales X'),
            Field::make('select', 'fakesalesx_position', 'Position')
                ->add_options([
                    'bottom-left' => 'Bottom Left',
                    'bottom-center' => 'Bottom Center',
                    'bottom-right' => 'Bottom Right',
                    'top-left' => 'Top Left',
                    'top-center' => 'Top center',
                    'top-right' => 'Top Right',
                ]),
            Field::make('complex', 'fakesalesx_complex', 'Fake Sales X Items')
                ->set_layout('tabbed-horizontal')
                ->set_min(3)
                ->add_fields('fakesalesx', 'FakeSalesX', [
                    //content
                    Field::make('text', 'fakesalesx_content', 'Content')
                        ->set_help_text('e.g. telah membeli')
                        ->set_attribute('placeholder', 'e.g. telah membeli'),
                    // name product
                    Field::make('text', 'fakesalesx_product_name', 'Product Name')
                        ->set_help_text('e.g. iPhone, Jasa Backlink, etc')
                        ->set_attribute('placeholder', 'iPhone 14 Ultra'),
                    // url product
                    Field::make('text', 'fakesalesx_url', 'Product URL')
                        ->set_help_text('e.g. https://budiharyono.com/product-1')
                        ->set_attribute('placeholder', 'e.g. https://budiharyono.com/product-1'),
                    // image product
                    Field::make('image', 'fakesalesx_image', 'Image')
                        ->set_value_type('url')
                        ->set_help_text('you can upload product or buyer image here'),
                    // price product
                    Field::make('text', 'fakesalesx_price', 'Price')
                        ->set_help_text('e.g. Rp150.000.000')
                        ->set_attribute('placeholder', 'e.g. Rp150.000.000'),
                    // buyer name
                    Field::make('text', 'fakesalesx_name', 'Buyer Name')
                        ->set_help_text('e.g. John Doe')
                        ->set_attribute('placeholder', 'e.g. John Doe'),
                    // buyer city
                    Field::make('text', 'fakesalesx_city', 'City')
                        ->set_help_text('e.g. Jakarta')
                        ->set_attribute('placeholder', 'e.g. Jakarta'),
                    // date
                    Field::make('date', 'fakesalesx_date', 'Date')
                        ->set_help_text('e.g. 2 minutes ago')
                        ->set_attribute('placeholder', 'e.g. 2 minutes ago'),
                    //discount
                    Field::make('text', 'fakesalesx_discount', 'Discount')
                        ->set_help_text('e.g. 50%')
                        ->set_attribute('placeholder', 'e.g. 50%'),
                ])
        ]);
}