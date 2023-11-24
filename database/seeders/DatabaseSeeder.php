<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Category;
use App\Models\Rating;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Nette\Utils\Random;
use Ramsey\Uuid\Uuid;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->createMany([
            [
                'id' => 'eb0e8d1d-958c-4b6f-8143-e04edb79005c',
                'name' => 'Jaxson Dias',
                'email' => 'jaxson@gmail.com',
                'password' => Hash::make(Random::generate(8)),
                'avatar_url' => 'https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1480&q=80',
            ],
            [
                'id' => 'c296c6c0-5c59-40dd-aa8a-ef2b015b7502',
                'name' => 'Brandon Botosh',
                'email' => 'brandon@gmail.com',
                'password' => Hash::make(Random::generate(8)),
                'avatar_url' => 'https://images.unsplash.com/photo-1531891437562-4301cf35b7e4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80',
            ],
            [
                'id' => '4383f783-6ce1-4f92-b1dd-7a7a693c4aef',
                'name' => 'Lindsey Philips',
                'email' => 'lindsey@gmail.com',
                'password' => Hash::make(Random::generate(8)),
                'avatar_url' => 'https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1471&q=80',
            ],
            [
                'id' => '6624df61-5947-4f8c-9c7e-39c8c40fa158',
                'name' => 'Jaylon Franci',
                'email' => 'jaylon@gmail.com',
                'password' => Hash::make(Random::generate(8)),
                'avatar_url' => 'https://images.unsplash.com/photo-1603415526960-f7e0328c63b1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80',
            ],
        ]);

        $category_01 = Category::factory()->create(['id' => 'c9f22067-4978-4a24-84a1-7d37f343dfc2', 'name' => 'Programação']);
        $category_02 = Category::factory()->create(['id' => 'f1a50507-0aa7-4245-8a5c-0d0de14e9d6d', 'name' => 'Educação']);
        $category_03 = Category::factory()->create(['id' => '8c4a4a4d-cbc4-4d2c-bb46-e95b0a536e09', 'name' => 'Ficção']);
        $category_04 = Category::factory()->create(['id' => 'e9c6d3f6-f3ec-4c52-ae28-6adcbab6ee67', 'name' => 'Aventura']);
        $category_05 = Category::factory()->create(['id' => '2e65c193-325a-40c3-98f3-6c13e9b75b02', 'name' => 'Geek']);
        $category_06 = Category::factory()->create(['id' => 'a1d0ee25-9c9a-49c8-84eb-7af1e0dd356d', 'name' => 'Alegoria']);
        $category_07 = Category::factory()->create(['id' => '997f8a10-21fb-4c80-bd16-17e8b79a31a3', 'name' => 'Fábula']);
        $category_08 = Category::factory()->create(['id' => '70efc33d-7d6b-4db4-bab6-524c4c4b2e2c', 'name' => 'Romance']);
        $category_09 = Category::factory()->create(['id' => '7c8dc74a-2e03-4d72-96de-822e332e5530', 'name' => 'Suspense']);
        $category_10 = Category::factory()->create(['id' => 'a4d63d4e-f8ad-4a60-b7b9-9d925a2a8a92', 'name' => 'Autoajuda']);
        $category_11 = Category::factory()->create(['id' => 'a2891eaa-6d9e-48d8-a86a-10aa017d3d3f', 'name' => 'Arquitetura']);
        $category_12 = Category::factory()->create(['id' => 'a0a61b53-37d7-48ec-9b92-6db074f6d9c9', 'name' => 'Terror']);

        $book_01 = Book::factory()->create(
            [
                'id' => 'c8176d86-896a-4c21-9219-6bb28cccaa5f',
                'name' => '14 Hábitos de Desenvolvedores Altamente Produtivos',
                'author' => 'Zeno Rocha',
                'summary' => 'Nec tempor nunc in egestas. Euismod nisi eleifend at et in sagittis. Penatibus id vestibulum imperdiet a at imperdiet lectus leo. Sit porta eget nec vitae sit vulputate eget',
                'cover_url' => 'images/books/14-habitos-de-desenvolvedores-altamente-produtivos.png',
                'total_pages' => 160,
            ]
        );
        $book_01->categories()->attach($category_01);
        $book_01->categories()->attach($category_02);

        $book_02 = Book::factory()->create([
            'id' => '375948a7-bca3-4b59-9f97-bfcde036b4ca',
            'name' => 'O Hobbit',
            'author' => 'J.R.R. Tolkien',
            'summary' => 'Semper et sapien proin vitae nisi. Feugiat neque integer donec et aenean posuere amet ultrices. Cras fermentum id pulvinar varius leo a in. Amet libero pharetra nunc elementum fringilla velit ipsum. Sed vulputate massa velit nibh',
            'cover_url' => 'images/books/o-hobbit.png',
            'total_pages' => 360,
        ]);
        $book_02->categories()->attach($category_03);
        $book_02->categories()->attach($category_04);

        $book_03 = Book::factory()->create([
            'id' => '86596503-369b-4614-bacf-11c9bb73e779',
            'name' => 'O guia do mochileiro das galáxias',
            'author' => 'Douglas Adams',
            'summary' => 'Nec tempor nunc in egestas. Euismod nisi eleifend at et in sagittis. Penatibus id vestibulum imperdiet a at imperdiet lectus leo. Sit porta eget nec vitae sit vulputate eget',
            'cover_url' => 'images/books/o-guia-do-mochileiro-das-galaxias.png',
            'total_pages' => 250,
        ]);
        $book_03->categories()->attach($category_03);
        $book_03->categories()->attach($category_05);

        $book_04 = Book::factory()->create([
            'id' => 'd0d70b05-d48f-4d83-b1e8-0b4dd984c97d',
            'name' => 'A revolução dos bichos',
            'author' => 'George Orwell',
            'summary' => 'Nec tempor nunc in egestas. Euismod nisi eleifend at et in sagittis. Penatibus id vestibulum imperdiet a at imperdiet lectus leo. Sit porta eget nec vitae sit vulputate eget',
            'cover_url' => 'images/books/a-revolucao-dos-bixos.png',
            'total_pages' => 350,
        ]);
        $book_04->categories()->attach($category_06);
        $book_04->categories()->attach($category_07);

        $book_05 = Book::factory()->create([
            'id' => '48b86ac2-014e-401d-bcbb-331ce5f4a457',
            'name' => 'O fim da eternidade',
            'author' => 'Isaac Asimov',
            'summary' => 'Nec tempor nunc in egestas. Euismod nisi eleifend at et in sagittis. Penatibus id vestibulum imperdiet a at imperdiet lectus leo. Sit porta eget nec vitae sit vulputate eget',
            'cover_url' => 'images/books/o-fim-da-eternidade.png',
            'total_pages' => 165,
        ]);
        $book_05->categories()->attach($category_03);
        $book_05->categories()->attach($category_08);

        $book_06 = Book::factory()->create([
            'id' => 'e688c24f-d14d-4607-a12e-90e6e367398d',
            'name' => 'Entendendo Algoritmos',
            'author' => 'Aditya Y. Bhargava',
            'summary' => 'Nec tempor nunc in egestas. Euismod nisi eleifend at et in sagittis. Penatibus id vestibulum imperdiet a at imperdiet lectus leo. Sit porta eget nec vitae sit vulputate eget',
            'cover_url' => 'images/books/entendendo-algoritmos.png',
            'total_pages' => 165,
        ]);
        $book_06->categories()->attach($category_01);
        $book_06->categories()->attach($category_02);

        $book_07 = Book::factory()->create([
            'id' => '0440ad7d-230e-4573-b455-84ca38b5d339',
            'name' => 'Código Limpo',
            'author' => 'Robert C. Martin',
            'summary' => 'Nec tempor nunc in egestas. Euismod nisi eleifend at et in sagittis. Penatibus id vestibulum imperdiet a at imperdiet lectus leo. Sit porta eget nec vitae sit vulputate eget',
            'cover_url' => 'images/books/codigo-limpo.png',
            'total_pages' => 365,
        ]);
        $book_07->categories()->attach($category_01);
        $book_07->categories()->attach($category_02);

        $book_08 = Book::factory()->create([
            'id' => '14f410df-b28a-4e72-b1b4-363e26e160dd',
            'name' => 'O poder do hábito',
            'author' => 'Charles Duhigg',
            'summary' => 'Nec tempor nunc in egestas. Euismod nisi eleifend at et in sagittis. Penatibus id vestibulum imperdiet a at imperdiet lectus leo. Sit porta eget nec vitae sit vulputate eget',
            'cover_url' => 'images/books/o-poder-do-habito.png',
            'total_pages' => 288,
        ]);
        $book_08->categories()->attach($category_02);
        $book_08->categories()->attach($category_10);

        $book_09 = Book::factory()->create([
            'id' => 'd2870ad0-3312-4ac2-af9f-76af6565587d',
            'name' => 'Arquitetura limpa',
            'author' => 'Robert C. Martin',
            'summary' => 'Nec tempor nunc in egestas. Euismod nisi eleifend at et in sagittis. Penatibus id vestibulum imperdiet a at imperdiet lectus leo. Sit porta eget nec vitae sit vulputate eget',
            'cover_url' => 'images/books/arquitetura-limpa.png',
            'total_pages' => 288,
        ]);
        $book_09->categories()->attach($category_01);
        $book_09->categories()->attach($category_02);

        $book_10 = Book::factory()->create([
            'id' => '4fd2b389-b211-40b5-9797-f78cbb985645',
            'name' => 'Histórias extraordinárias',
            'author' => 'Edgar Allan Poe',
            'summary' => 'Nec tempor nunc in egestas. Euismod nisi eleifend at et in sagittis. Penatibus id vestibulum imperdiet a at imperdiet lectus leo. Sit porta eget nec vitae sit vulputate eget',
            'cover_url' => 'images/books/historias-extraordinarias.png',
            'total_pages' => 332,
        ]);
        $book_10->categories()->attach($category_03);
        $book_10->categories()->attach($category_09);

        $book_11 = Book::factory()->create([
            'id' => '6de9f6b8-5ff4-4e06-b9f4-843eca462803',
            'name' => 'Refatoração',
            'author' => 'Martin Fowler',
            'summary' => 'Nec tempor nunc in egestas. Euismod nisi eleifend at et in sagittis. Penatibus id vestibulum imperdiet a at imperdiet lectus leo. Sit porta eget nec vitae sit vulputate eget',
            'cover_url' => 'images/books/refatoracao.png',
            'total_pages' => 332,
        ]);
        $book_11->categories()->attach($category_01);
        $book_11->categories()->attach($category_02);

        $book_12 = Book::factory()->create([
            'id' => 'd0590f9a-dd89-42fd-9bbb-bf26c2e4dcf9',
            'name' => 'Domain-Driven Design',
            'author' => 'Eric Evans',
            'summary' => 'Nec tempor nunc in egestas. Euismod nisi eleifend at et in sagittis. Penatibus id vestibulum imperdiet a at imperdiet lectus leo. Sit porta eget nec vitae sit vulputate eget',
            'cover_url' => 'images/books/domain-driven-design.png',
            'total_pages' => 288,
        ]);
        $book_12->categories()->attach($category_01);
        $book_12->categories()->attach($category_11);

        $book_13 = Book::factory()->create([
            'id' => '1d5cdbdc-b90f-40d5-8fe9-d4923ae12dbd',
            'name' => 'Viagem ao Centro da Terra',
            'author' => 'Julio Verne',
            'summary' => 'Nec tempor nunc in egestas. Euismod nisi eleifend at et in sagittis. Penatibus id vestibulum imperdiet a at imperdiet lectus leo. Sit porta eget nec vitae sit vulputate eget',
            'cover_url' => 'images/books/viagem-ao-centro-da-terra.png',
            'total_pages' => 288,
        ]);
        $book_13->categories()->attach($category_03);
        $book_13->categories()->attach($category_08);

        $book_14 = Book::factory()->create([
            'id' => '404e47f8-da53-44fd-ab53-37ed171c3a9f',
            'name' => 'Fragmentos do Horror',
            'author' => 'Junji Ito',
            'summary' => 'Nec tempor nunc in egestas. Euismod nisi eleifend at et in sagittis. Penatibus id vestibulum imperdiet a at imperdiet lectus leo. Sit porta eget nec vitae sit vulputate eget',
            'cover_url' => 'images/books/fragmentos-do-horror.png',
            'total_pages' => 144,
        ]);
        $book_14->categories()->attach($category_03);
        $book_14->categories()->attach($category_12);

        $book_15 = Book::factory()->create([
            'id' => '66cb0f47-7e20-4492-b640-9c020fcae6f2',
            'name' => 'O Programador Pragmático',
            'author' => 'Andrew Hunt',
            'summary' => 'Nec tempor nunc in egestas. Euismod nisi eleifend at et in sagittis. Penatibus id vestibulum imperdiet a at imperdiet lectus leo. Sit porta eget nec vitae sit vulputate eget',
            'cover_url' => 'images/books/o-programador-pragmatico.png',
            'total_pages' => 205,
        ]);
        $book_15->categories()->attach($category_01);
        $book_15->categories()->attach($category_02);

        Rating::factory()->createMany([
            [
                'id' => Uuid::uuid4()->toString(),
                'rate' => 4,
                'description' => 'Nec tempor nunc in egestas. Euismod nisi eleifend at et in sagittis.',
                'book_id' => '375948a7-bca3-4b59-9f97-bfcde036b4ca',
                'user_id' => 'eb0e8d1d-958c-4b6f-8143-e04edb79005c',
            ],
            [
                'id' => Uuid::uuid4()->toString(),
                'rate' => 4,
                'description' => 'Nec tempor nunc in egestas.',
                'book_id' => '86596503-369b-4614-bacf-11c9bb73e779',
                'user_id' => 'c296c6c0-5c59-40dd-aa8a-ef2b015b7502',
            ],
            [
                'id' => Uuid::uuid4()->toString(),
                'rate' => 5,
                'description' => 'Semper et sapien proin vitae nisi. Feugiat neque integer donec et aenean posuere amet ultrices.',
                'book_id' => 'e688c24f-d14d-4607-a12e-90e6e367398d',
                'user_id' => '4383f783-6ce1-4f92-b1dd-7a7a693c4aef',
            ],
            [
                'id' => Uuid::uuid4()->toString(),
                'rate' => 4,
                'description' => 'Nec tempor nunc in egestas.',
                'book_id' => '86596503-369b-4614-bacf-11c9bb73e779',
                'user_id' => 'c296c6c0-5c59-40dd-aa8a-ef2b015b7502',
            ],
            [
                'id' => Uuid::uuid4()->toString(),
                'rate' => 5,
                'description' => 'Semper et sapien proin vitae nisi. Feugiat neque integer donec et aenean posuere amet ultrices.',
                'book_id' => 'e688c24f-d14d-4607-a12e-90e6e367398d',
                'user_id' => '4383f783-6ce1-4f92-b1dd-7a7a693c4aef',
            ],
            [
                'id' => Uuid::uuid4()->toString(),
                'rate' => 4,
                'description' => 'Nec tempor nunc in egestas. Euismod nisi eleifend at et in sagittis.',
                'book_id' => '48b86ac2-014e-401d-bcbb-331ce5f4a457',
                'user_id' => 'eb0e8d1d-958c-4b6f-8143-e04edb79005c',
            ],
            [
                'id' => Uuid::uuid4()->toString(),
                'rate' => 4,
                'description' => 'Nec tempor nunc in egestas.',
                'book_id' => 'd0d70b05-d48f-4d83-b1e8-0b4dd984c97d',
                'user_id' => 'c296c6c0-5c59-40dd-aa8a-ef2b015b7502',
            ],
            [
                'id' => Uuid::uuid4()->toString(),
                'rate' => 5,
                'description' => 'Semper et sapien proin vitae nisi. Feugiat neque integer donec et aenean posuere amet ultrices.',
                'book_id' => '375948a7-bca3-4b59-9f97-bfcde036b4ca',
                'user_id' => '4383f783-6ce1-4f92-b1dd-7a7a693c4aef',
            ],
            [
                'id' => Uuid::uuid4()->toString(),
                'rate' => 4,
                'description' => 'Nec tempor nunc in egestas. Euismod nisi eleifend at et in sagittis.',
                'book_id' => 'c8176d86-896a-4c21-9219-6bb28cccaa5f',
                'user_id' => 'eb0e8d1d-958c-4b6f-8143-e04edb79005c',
            ],
            [
                'id' => Uuid::uuid4()->toString(),
                'rate' => 4,
                'description' => 'Nec tempor nunc in egestas.',
                'book_id' => '0440ad7d-230e-4573-b455-84ca38b5d339',
                'user_id' => 'c296c6c0-5c59-40dd-aa8a-ef2b015b7502',
            ],
            [
                'id' => Uuid::uuid4()->toString(),
                'rate' => 5,
                'description' => 'Semper et sapien proin vitae nisi. Feugiat neque integer donec et aenean posuere amet ultrices.',
                'book_id' => '14f410df-b28a-4e72-b1b4-363e26e160dd',
                'user_id' => '4383f783-6ce1-4f92-b1dd-7a7a693c4aef',
            ],
            [
                'id' => Uuid::uuid4()->toString(),
                'rate' => 4,
                'description' => 'Nec tempor nunc in egestas. Euismod nisi eleifend at et in sagittis.',
                'book_id' => 'd2870ad0-3312-4ac2-af9f-76af6565587d',
                'user_id' => 'eb0e8d1d-958c-4b6f-8143-e04edb79005c',
            ],
            [
                'id' => Uuid::uuid4()->toString(),
                'rate' => 4,
                'description' => 'Nec tempor nunc in egestas.',
                'book_id' => '4fd2b389-b211-40b5-9797-f78cbb985645',
                'user_id' => 'c296c6c0-5c59-40dd-aa8a-ef2b015b7502',
            ],
            [
                'id' => Uuid::uuid4()->toString(),
                'rate' => 5,
                'description' => 'Semper et sapien proin vitae nisi. Feugiat neque integer donec et aenean posuere amet ultrices.',
                'book_id' => '6de9f6b8-5ff4-4e06-b9f4-843eca462803',
                'user_id' => '4383f783-6ce1-4f92-b1dd-7a7a693c4aef',
            ],
            [
                'id' => Uuid::uuid4()->toString(),
                'rate' => 4,
                'description' => 'Nec tempor nunc in egestas. Euismod nisi eleifend at et in sagittis.',
                'book_id' => 'd0590f9a-dd89-42fd-9bbb-bf26c2e4dcf9',
                'user_id' => 'eb0e8d1d-958c-4b6f-8143-e04edb79005c',
            ],
            [
                'id' => Uuid::uuid4()->toString(),
                'rate' => 4,
                'description' => 'Nec tempor nunc in egestas.',
                'book_id' => '1d5cdbdc-b90f-40d5-8fe9-d4923ae12dbd',
                'user_id' => 'c296c6c0-5c59-40dd-aa8a-ef2b015b7502',
            ],
            [
                'id' => Uuid::uuid4()->toString(),
                'rate' => 5,
                'description' => 'Semper et sapien proin vitae nisi. Feugiat neque integer donec et aenean posuere amet ultrices.',
                'book_id' => '404e47f8-da53-44fd-ab53-37ed171c3a9f',
                'user_id' => '4383f783-6ce1-4f92-b1dd-7a7a693c4aef',
            ],
            [
                'id' => Uuid::uuid4()->toString(),
                'rate' => 4,
                'description' => 'Nec tempor nunc in egestas. Euismod nisi eleifend at et in sagittis.',
                'book_id' => '66cb0f47-7e20-4492-b640-9c020fcae6f2',
                'user_id' => 'eb0e8d1d-958c-4b6f-8143-e04edb79005c',
            ],
        ]);
    }
}
