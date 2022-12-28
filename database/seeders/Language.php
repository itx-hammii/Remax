<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Language extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $languages =   [
            "Mandarin",
            "Spanish",
            "English",
            "Hindi",
            "Arabic",
            "Portuguese",
            "Bengali",
            "Russian",
            "Japanese",
            "Punjabi",
            "German",
            "Javanese",
            "Wu (inc. Shanghainese)",
            "Malay/Indonesian",
            "Telugu",
            "Vietnamese",
            "Korean",
            "French",
            "Marathi",
            "Tamil",
            "Urdu",
            "Turkish",
            "Italian",
            "Yue (Cantonese)",
            "Thai",
            "Gujarati",
            "Jin",
            "Southern Min",
            "Persian",
            "Polish",
            "Pashto",
            "Kannada",
            "Xiang (Hunnanese)",
            "Malayalam",
            "Sundanese",
            "Hausa",
            "Odia (Oriya)",
            "Burmese",
            "Hakka",
            "Ukrainian",
            "Bhojpuri",
            "Tagalog",
            "Yoruba",
            "Maithili",
            "Uzbek",
            "Sindhi",
            "Amharic",
            "Fula",
            "Romanian",
            "Oromo",
            "Igbo",
            "Azerbaijani",
            "Awadhi",
            "Gan Chinese",
            "Cebuano (Visayan)",
            "Dutch",
            "Kurdish",
            "Serbo-Croatian",
            "Malagasy",
            "Saraiki",
            "Nepali",
            "Sinhalese",
            "Chittagonian",
            "Zhuang",
            "Khmer",
            "Turkmen",
            "Assamese",
            "Madurese",
            "Somali",
            "Marwari",
            "Magahi",
            "Haryanvi",
            "Hungarian",
            "Chhattisgarhi",
            "Greek",
            "Chewa",
            "Deccan",
            "Akan",
            "Kazakh",
            "Northern Min",
            "Sylheti",
            "Zulu",
            "Czech",
            "Kinyarwanda",
            "Dhundhari",
            "Haitian Creole",
            "Eastern Min",
            "Ilocano",
            "Quechua",
            "Kirundi",
            "Swedish",
            "Hmong",
            "Shona",
            "Uyghur",
            "Hiligaynon",
            "Mossi",
            "Xhosa",
            "Belarusian",
            "Balochi",
            "Konkani"
        ];
        foreach ($languages as $data) {
            DB::table('languages')->insert([
                'language' => $data,
            ]);
        }
    }
}
