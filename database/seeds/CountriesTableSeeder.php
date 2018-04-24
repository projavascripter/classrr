<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert([
            ['code' => 'AF', 'name' => 'Afghanistan', 'is_active' => true],
            ['code' => 'AL', 'name' => 'Albania', 'is_active' => true],
            ['code' => 'DZ', 'name' => 'Algeria', 'is_active' => true],
            ['code' => 'DS', 'name' => 'American Samoa', 'is_active' => true],
            ['code' => 'AD', 'name' => 'Andorra', 'is_active' => true],
            ['code' => 'AO', 'name' => 'Angola', 'is_active' => true],
            ['code' => 'AI', 'name' => 'Anguilla', 'is_active' => true],
            ['code' => 'AQ', 'name' => 'Antarctica', 'is_active' => true],
            ['code' => 'AG', 'name' => 'Antigua and Barbuda', 'is_active' => true],
            ['code' => 'AR', 'name' => 'Argentina', 'is_active' => true],
            ['code' => 'AM', 'name' => 'Armenia', 'is_active' => true],
            ['code' => 'AW', 'name' => 'Aruba', 'is_active' => true],
            ['code' => 'AU', 'name' => 'Australia', 'is_active' => true],
            ['code' => 'AT', 'name' => 'Austria', 'is_active' => true],
            ['code' => 'AZ', 'name' => 'Azerbaijan', 'is_active' => true],
            ['code' => 'BS', 'name' => 'Bahamas', 'is_active' => true],
            ['code' => 'BH', 'name' => 'Bahrain', 'is_active' => true],
            ['code' => 'BD', 'name' => 'Bangladesh', 'is_active' => true],
            ['code' => 'BB', 'name' => 'Barbados', 'is_active' => true],
            ['code' => 'BY', 'name' => 'Belarus', 'is_active' => true],
            ['code' => 'BE', 'name' => 'Belgium', 'is_active' => true],
            ['code' => 'BZ', 'name' => 'Belize', 'is_active' => true],
            ['code' => 'BJ', 'name' => 'Benin', 'is_active' => true],
            ['code' => 'BM', 'name' => 'Bermuda', 'is_active' => true],
            ['code' => 'BT', 'name' => 'Bhutan', 'is_active' => true],
            ['code' => 'BO', 'name' => 'Bolivia', 'is_active' => true],
            ['code' => 'BA', 'name' => 'Bosnia and Herzegovina', 'is_active' => true],
            ['code' => 'BW', 'name' => 'Botswana', 'is_active' => true],
            ['code' => 'BV', 'name' => 'Bouvet Island', 'is_active' => true],
            ['code' => 'BR', 'name' => 'Brazil', 'is_active' => true],
            ['code' => 'IO', 'name' => 'British Indian Ocean Territory', 'is_active' => true],
            ['code' => 'BN', 'name' => 'Brunei Darussalam', 'is_active' => true],
            ['code' => 'BG', 'name' => 'Bulgaria', 'is_active' => true],
            ['code' => 'BF', 'name' => 'Burkina Faso', 'is_active' => true],
            ['code' => 'BI', 'name' => 'Burundi', 'is_active' => true],
            ['code' => 'KH', 'name' => 'Cambodia', 'is_active' => true],
            ['code' => 'CM', 'name' => 'Cameroon', 'is_active' => true],
            ['code' => 'CA', 'name' => 'Canada', 'is_active' => true],
            ['code' => 'CV', 'name' => 'Cape Verde', 'is_active' => true],
            ['code' => 'KY', 'name' => 'Cayman Islands', 'is_active' => true],
            ['code' => 'CF', 'name' => 'Central African Republic', 'is_active' => true],
            ['code' => 'TD', 'name' => 'Chad', 'is_active' => true],
            ['code' => 'CL', 'name' => 'Chile', 'is_active' => true],
            ['code' => 'CN', 'name' => 'China', 'is_active' => true],
            ['code' => 'CX', 'name' => 'Christmas Island', 'is_active' => true],
            ['code' => 'CC', 'name' => 'Cocos (Keeling) Islands', 'is_active' => true],
            ['code' => 'CO', 'name' => 'Colombia', 'is_active' => true],
            ['code' => 'KM', 'name' => 'Comoros', 'is_active' => true],
            ['code' => 'CG', 'name' => 'Congo', 'is_active' => true],
            ['code' => 'CK', 'name' => 'Cook Islands', 'is_active' => true],
            ['code' => 'CR', 'name' => 'Costa Rica', 'is_active' => true],
            ['code' => 'HR', 'name' => 'Croatia (Hrvatska)', 'is_active' => true],
            ['code' => 'CU', 'name' => 'Cuba', 'is_active' => true],
            ['code' => 'CY', 'name' => 'Cyprus', 'is_active' => true],
            ['code' => 'CZ', 'name' => 'Czech Republic', 'is_active' => true],
            ['code' => 'DK', 'name' => 'Denmark', 'is_active' => true],
            ['code' => 'DJ', 'name' => 'Djibouti', 'is_active' => true],
            ['code' => 'DM', 'name' => 'Dominica', 'is_active' => true],
            ['code' => 'DO', 'name' => 'Dominican Republic', 'is_active' => true],
            ['code' => 'TP', 'name' => 'East Timor', 'is_active' => true],
            ['code' => 'EC', 'name' => 'Ecuador', 'is_active' => true],
            ['code' => 'EG', 'name' => 'Egypt', 'is_active' => true],
            ['code' => 'SV', 'name' => 'El Salvador', 'is_active' => true],
            ['code' => 'GQ', 'name' => 'Equatorial Guinea', 'is_active' => true],
            ['code' => 'ER', 'name' => 'Eritrea', 'is_active' => true],
            ['code' => 'EE', 'name' => 'Estonia', 'is_active' => true],
            ['code' => 'ET', 'name' => 'Ethiopia', 'is_active' => true],
            ['code' => 'FK', 'name' => 'Falkland Islands (Malvinas)', 'is_active' => true],
            ['code' => 'FO', 'name' => 'Faroe Islands', 'is_active' => true],
            ['code' => 'FJ', 'name' => 'Fiji', 'is_active' => true],
            ['code' => 'FI', 'name' => 'Finland', 'is_active' => true],
            ['code' => 'FR', 'name' => 'France', 'is_active' => true],
            ['code' => 'FX', 'name' => 'France, Metropolitan', 'is_active' => true],
            ['code' => 'GF', 'name' => 'French Guiana', 'is_active' => true],
            ['code' => 'PF', 'name' => 'French Polynesia', 'is_active' => true],
            ['code' => 'TF', 'name' => 'French Southern Territories', 'is_active' => true],
            ['code' => 'GA', 'name' => 'Gabon', 'is_active' => true],
            ['code' => 'GM', 'name' => 'Gambia', 'is_active' => true],
            ['code' => 'GE', 'name' => 'Georgia', 'is_active' => true],
            ['code' => 'DE', 'name' => 'Germany', 'is_active' => true],
            ['code' => 'GH', 'name' => 'Ghana', 'is_active' => true],
            ['code' => 'GI', 'name' => 'Gibraltar', 'is_active' => true],
            ['code' => 'GK', 'name' => 'Guernsey', 'is_active' => true],
            ['code' => 'GR', 'name' => 'Greece', 'is_active' => true],
            ['code' => 'GL', 'name' => 'Greenland', 'is_active' => true],
            ['code' => 'GD', 'name' => 'Grenada', 'is_active' => true],
            ['code' => 'GP', 'name' => 'Guadeloupe', 'is_active' => true],
            ['code' => 'GU', 'name' => 'Guam', 'is_active' => true],
            ['code' => 'GT', 'name' => 'Guatemala', 'is_active' => true],
            ['code' => 'GN', 'name' => 'Guinea', 'is_active' => true],
            ['code' => 'GW', 'name' => 'Guinea-Bissau', 'is_active' => true],
            ['code' => 'GY', 'name' => 'Guyana', 'is_active' => true],
            ['code' => 'HT', 'name' => 'Haiti', 'is_active' => true],
            ['code' => 'HM', 'name' => 'Heard and Mc Donald Islands', 'is_active' => true],
            ['code' => 'HN', 'name' => 'Honduras', 'is_active' => true],
            ['code' => 'HK', 'name' => 'Hong Kong', 'is_active' => true],
            ['code' => 'HU', 'name' => 'Hungary', 'is_active' => true],
            ['code' => 'IS', 'name' => 'Iceland', 'is_active' => true],
            ['code' => 'IN', 'name' => 'India', 'is_active' => true],
            ['code' => 'IM', 'name' => 'Isle of Man', 'is_active' => true],
            ['code' => 'ID', 'name' => 'Indonesia', 'is_active' => true],
            ['code' => 'IR', 'name' => 'Iran (Islamic Republic of)', 'is_active' => true],
            ['code' => 'IQ', 'name' => 'Iraq', 'is_active' => true],
            ['code' => 'IE', 'name' => 'Ireland', 'is_active' => true],
            ['code' => 'IL', 'name' => 'Israel', 'is_active' => true],
            ['code' => 'IT', 'name' => 'Italy', 'is_active' => true],
            ['code' => 'CI', 'name' => 'Ivory Coast', 'is_active' => true],
            ['code' => 'JE', 'name' => 'Jersey', 'is_active' => true],
            ['code' => 'JM', 'name' => 'Jamaica', 'is_active' => true],
            ['code' => 'JP', 'name' => 'Japan', 'is_active' => true],
            ['code' => 'JO', 'name' => 'Jordan', 'is_active' => true],
            ['code' => 'KZ', 'name' => 'Kazakhstan', 'is_active' => true],
            ['code' => 'KE', 'name' => 'Kenya', 'is_active' => true],
            ['code' => 'KI', 'name' => 'Kiribati', 'is_active' => true],
            ['code' => 'KP', 'name' => 'Korea, Democratic People', 'is_active' => true],
            ['code' => 'KR', 'name' => 'Korea, Republic of', 'is_active' => true],
            ['code' => 'XK', 'name' => 'Kosovo', 'is_active' => true],
            ['code' => 'KW', 'name' => 'Kuwait', 'is_active' => true],
            ['code' => 'KG', 'name' => 'Kyrgyzstan', 'is_active' => true],
            ['code' => 'LA', 'name' => 'Lao People', 'is_active' => true],
            ['code' => 'LV', 'name' => 'Latvia', 'is_active' => true],
            ['code' => 'LB', 'name' => 'Lebanon', 'is_active' => true],
            ['code' => 'LS', 'name' => 'Lesotho', 'is_active' => true],
            ['code' => 'LR', 'name' => 'Liberia', 'is_active' => true],
            ['code' => 'LY', 'name' => 'Libyan Arab Jamahiriya', 'is_active' => true],
            ['code' => 'LI', 'name' => 'Liechtenstein', 'is_active' => true],
            ['code' => 'LT', 'name' => 'Lithuania', 'is_active' => true],
            ['code' => 'LU', 'name' => 'Luxembourg', 'is_active' => true],
            ['code' => 'MO', 'name' => 'Macau', 'is_active' => true],
            ['code' => 'MK', 'name' => 'Macedonia', 'is_active' => true],
            ['code' => 'MG', 'name' => 'Madagascar', 'is_active' => true],
            ['code' => 'MW', 'name' => 'Malawi', 'is_active' => true],
            ['code' => 'MY', 'name' => 'Malaysia', 'is_active' => true],
            ['code' => 'MV', 'name' => 'Maldives', 'is_active' => true],
            ['code' => 'ML', 'name' => 'Mali', 'is_active' => true],
            ['code' => 'MT', 'name' => 'Malta', 'is_active' => true],
            ['code' => 'MH', 'name' => 'Marshall Islands', 'is_active' => true],
            ['code' => 'MQ', 'name' => 'Martinique', 'is_active' => true],
            ['code' => 'MR', 'name' => 'Mauritania', 'is_active' => true],
            ['code' => 'MU', 'name' => 'Mauritius', 'is_active' => true],
            ['code' => 'TY', 'name' => 'Mayotte', 'is_active' => true],
            ['code' => 'MX', 'name' => 'Mexico', 'is_active' => true],
            ['code' => 'FM', 'name' => 'Micronesia, Federated States of', 'is_active' => true],
            ['code' => 'MD', 'name' => 'Moldova, Republic of', 'is_active' => true],
            ['code' => 'MC', 'name' => 'Monaco', 'is_active' => true],
            ['code' => 'MN', 'name' => 'Mongolia', 'is_active' => true],
            ['code' => 'ME', 'name' => 'Montenegro', 'is_active' => true],
            ['code' => 'MS', 'name' => 'Montserrat', 'is_active' => true],
            ['code' => 'MA', 'name' => 'Morocco', 'is_active' => true],
            ['code' => 'MZ', 'name' => 'Mozambique', 'is_active' => true],
            ['code' => 'MM', 'name' => 'Myanmar', 'is_active' => true],
            ['code' => 'NA', 'name' => 'Namibia', 'is_active' => true],
            ['code' => 'NR', 'name' => 'Nauru', 'is_active' => true],
            ['code' => 'NP', 'name' => 'Nepal', 'is_active' => true],
            ['code' => 'NL', 'name' => 'Netherlands', 'is_active' => true],
            ['code' => 'AN', 'name' => 'Netherlands Antilles', 'is_active' => true],
            ['code' => 'NC', 'name' => 'New Caledonia', 'is_active' => true],
            ['code' => 'NZ', 'name' => 'New Zealand', 'is_active' => true],
            ['code' => 'NI', 'name' => 'Nicaragua', 'is_active' => true],
            ['code' => 'NE', 'name' => 'Niger', 'is_active' => true],
            ['code' => 'NG', 'name' => 'Nigeria', 'is_active' => true],
            ['code' => 'NU', 'name' => 'Niue', 'is_active' => true],
            ['code' => 'NF', 'name' => 'Norfolk Island', 'is_active' => true],
            ['code' => 'MP', 'name' => 'Northern Mariana Islands', 'is_active' => true],
            ['code' => 'NO', 'name' => 'Norway', 'is_active' => true],
            ['code' => 'OM', 'name' => 'Oman', 'is_active' => true],
            ['code' => 'PK', 'name' => 'Pakistan', 'is_active' => true],
            ['code' => 'PW', 'name' => 'Palau', 'is_active' => true],
            ['code' => 'PS', 'name' => 'Palestine', 'is_active' => true],
            ['code' => 'PA', 'name' => 'Panama', 'is_active' => true],
            ['code' => 'PG', 'name' => 'Papua New Guinea', 'is_active' => true],
            ['code' => 'PY', 'name' => 'Paraguay', 'is_active' => true],
            ['code' => 'PE', 'name' => 'Peru', 'is_active' => true],
            ['code' => 'PH', 'name' => 'Philippines', 'is_active' => true],
            ['code' => 'PN', 'name' => 'Pitcairn', 'is_active' => true],
            ['code' => 'PL', 'name' => 'Poland', 'is_active' => true],
            ['code' => 'PT', 'name' => 'Portugal', 'is_active' => true],
            ['code' => 'PR', 'name' => 'Puerto Rico', 'is_active' => true],
            ['code' => 'QA', 'name' => 'Qatar', 'is_active' => true],
            ['code' => 'RE', 'name' => 'Reunion', 'is_active' => true],
            ['code' => 'RO', 'name' => 'Romania', 'is_active' => true],
            ['code' => 'RU', 'name' => 'Russian Federation', 'is_active' => true],
            ['code' => 'RW', 'name' => 'Rwanda', 'is_active' => true],
            ['code' => 'KN', 'name' => 'Saint Kitts and Nevis', 'is_active' => true],
            ['code' => 'LC', 'name' => 'Saint Lucia', 'is_active' => true],
            ['code' => 'VC', 'name' => 'Saint Vincent and the Grenadines', 'is_active' => true],
            ['code' => 'WS', 'name' => 'Samoa', 'is_active' => true],
            ['code' => 'SM', 'name' => 'San Marino', 'is_active' => true],
            ['code' => 'ST', 'name' => 'Sao Tome and Principe', 'is_active' => true],
            ['code' => 'SA', 'name' => 'Saudi Arabia', 'is_active' => true],
            ['code' => 'SN', 'name' => 'Senegal', 'is_active' => true],
            ['code' => 'RS', 'name' => 'Serbia', 'is_active' => true],
            ['code' => 'SC', 'name' => 'Seychelles', 'is_active' => true],
            ['code' => 'SL', 'name' => 'Sierra Leone', 'is_active' => true],
            ['code' => 'SG', 'name' => 'Singapore', 'is_active' => true],
            ['code' => 'SK', 'name' => 'Slovakia', 'is_active' => true],
            ['code' => 'SI', 'name' => 'Slovenia', 'is_active' => true],
            ['code' => 'SB', 'name' => 'Solomon Islands', 'is_active' => true],
            ['code' => 'SO', 'name' => 'Somalia', 'is_active' => true],
            ['code' => 'ZA', 'name' => 'South Africa', 'is_active' => true],
            ['code' => 'GS', 'name' => 'South Georgia South Sandwich Islands', 'is_active' => true],
            ['code' => 'ES', 'name' => 'Spain', 'is_active' => true],
            ['code' => 'LK', 'name' => 'Sri Lanka', 'is_active' => true],
            ['code' => 'SH', 'name' => 'St. Helena', 'is_active' => true],
            ['code' => 'PM', 'name' => 'St. Pierre and Miquelon', 'is_active' => true],
            ['code' => 'SD', 'name' => 'Sudan', 'is_active' => true],
            ['code' => 'SR', 'name' => 'Suriname', 'is_active' => true],
            ['code' => 'SJ', 'name' => 'Svalbard and Jan Mayen Islands', 'is_active' => true],
            ['code' => 'SZ', 'name' => 'Swaziland', 'is_active' => true],
            ['code' => 'SE', 'name' => 'Sweden', 'is_active' => true],
            ['code' => 'CH', 'name' => 'Switzerland', 'is_active' => true],
            ['code' => 'SY', 'name' => 'Syrian Arab Republic', 'is_active' => true],
            ['code' => 'TW', 'name' => 'Taiwan', 'is_active' => true],
            ['code' => 'TJ', 'name' => 'Tajikistan', 'is_active' => true],
            ['code' => 'TZ', 'name' => 'Tanzania, United Republic of', 'is_active' => true],
            ['code' => 'TH', 'name' => 'Thailand', 'is_active' => true],
            ['code' => 'TG', 'name' => 'Togo', 'is_active' => true],
            ['code' => 'TK', 'name' => 'Tokelau', 'is_active' => true],
            ['code' => 'TO', 'name' => 'Tonga', 'is_active' => true],
            ['code' => 'TT', 'name' => 'Trinidad and Tobago', 'is_active' => true],
            ['code' => 'TN', 'name' => 'Tunisia', 'is_active' => true],
            ['code' => 'TR', 'name' => 'Turkey', 'is_active' => true],
            ['code' => 'TM', 'name' => 'Turkmenistan', 'is_active' => true],
            ['code' => 'TC', 'name' => 'Turks and Caicos Islands', 'is_active' => true],
            ['code' => 'TV', 'name' => 'Tuvalu', 'is_active' => true],
            ['code' => 'UG', 'name' => 'Uganda', 'is_active' => true],
            ['code' => 'UA', 'name' => 'Ukraine', 'is_active' => true],
            ['code' => 'AE', 'name' => 'United Arab Emirates', 'is_active' => true],
            ['code' => 'GB', 'name' => 'United Kingdom', 'is_active' => true],
            ['code' => 'US', 'name' => 'United States', 'is_active' => true],
            ['code' => 'UM', 'name' => 'United States minor outlying islands', 'is_active' => true],
            ['code' => 'UY', 'name' => 'Uruguay', 'is_active' => true],
            ['code' => 'UZ', 'name' => 'Uzbekistan', 'is_active' => true],
            ['code' => 'VU', 'name' => 'Vanuatu', 'is_active' => true],
            ['code' => 'VA', 'name' => 'Vatican City State', 'is_active' => true],
            ['code' => 'VE', 'name' => 'Venezuela', 'is_active' => true],
            ['code' => 'VN', 'name' => 'Vietnam', 'is_active' => true],
            ['code' => 'VG', 'name' => 'Virgin Islands (British)', 'is_active' => true],
            ['code' => 'VI', 'name' => 'Virgin Islands (U.S.)', 'is_active' => true],
            ['code' => 'WF', 'name' => 'Wallis and Futuna Islands', 'is_active' => true],
            ['code' => 'EH', 'name' => 'Western Sahara', 'is_active' => true],
            ['code' => 'YE', 'name' => 'Yemen', 'is_active' => true],
            ['code' => 'ZR', 'name' => 'Zaire', 'is_active' => true],
            ['code' => 'ZM', 'name' => 'Zambia', 'is_active' => true],
            ['code' => 'ZW', 'name' => 'Zimbabwe', 'is_active' => true],
        ]);
    }
}
