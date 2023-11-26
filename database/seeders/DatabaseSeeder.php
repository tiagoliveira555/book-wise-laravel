<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Category;
use App\Models\Rating;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Nette\Utils\Random;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->createMany([
            [
                'id' => 1,
                'name' => 'Jaxson Dias',
                'email' => 'jaxson@gmail.com',
                'password' => Hash::make(Random::generate(8)),
                'avatar_url' => 'https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1480&q=80',
            ],
            [
                'id' => 2,
                'name' => 'Brandon Botosh',
                'email' => 'brandon@gmail.com',
                'password' => Hash::make(Random::generate(8)),
                'avatar_url' => 'https://images.unsplash.com/photo-1531891437562-4301cf35b7e4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80',
            ],
            [
                'id' => 3,
                'name' => 'Lindsey Philips',
                'email' => 'lindsey@gmail.com',
                'password' => Hash::make(Random::generate(8)),
                'avatar_url' => 'https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1471&q=80',
            ],
            [
                'id' => 4,
                'name' => 'Jaylon Franci',
                'email' => 'jaylon@gmail.com',
                'password' => Hash::make(Random::generate(8)),
                'avatar_url' => 'https://images.unsplash.com/photo-1603415526960-f7e0328c63b1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80',
            ],
        ]);

        $category_01 = Category::factory()->create(['id' => 1, 'name' => 'Programação']);
        $category_02 = Category::factory()->create(['id' => 2, 'name' => 'Educação']);
        $category_03 = Category::factory()->create(['id' => 3, 'name' => 'Ficção']);
        $category_04 = Category::factory()->create(['id' => 4, 'name' => 'Aventura']);
        $category_05 = Category::factory()->create(['id' => 5, 'name' => 'Geek']);
        $category_06 = Category::factory()->create(['id' => 6, 'name' => 'Alegoria']);
        $category_07 = Category::factory()->create(['id' => 7, 'name' => 'Fábula']);
        $category_08 = Category::factory()->create(['id' => 8, 'name' => 'Romance']);
        $category_09 = Category::factory()->create(['id' => 9, 'name' => 'Suspense']);
        $category_10 = Category::factory()->create(['id' => 10, 'name' => 'Autoajuda']);
        $category_11 = Category::factory()->create(['id' => 11, 'name' => 'Arquitetura']);
        $category_12 = Category::factory()->create(['id' => 12, 'name' => 'Terror']);

        $book_01 = Book::factory()->create(
            [
                'id' => 1,
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
            'id' => 2,
            'name' => 'O Hobbit',
            'author' => 'J.R.R. Tolkien',
            'summary' => 'Semper et sapien proin vitae nisi. Feugiat neque integer donec et aenean posuere amet ultrices. Cras fermentum id pulvinar varius leo a in. Amet libero pharetra nunc elementum fringilla velit ipsum. Sed vulputate massa velit nibh',
            'cover_url' => 'images/books/o-hobbit.png',
            'total_pages' => 360,
        ]);
        $book_02->categories()->attach($category_03);
        $book_02->categories()->attach($category_04);

        $book_03 = Book::factory()->create([
            'id' => 3,
            'name' => 'O guia do mochileiro das galáxias',
            'author' => 'Douglas Adams',
            'summary' => 'Nec tempor nunc in egestas. Euismod nisi eleifend at et in sagittis. Penatibus id vestibulum imperdiet a at imperdiet lectus leo. Sit porta eget nec vitae sit vulputate eget',
            'cover_url' => 'images/books/o-guia-do-mochileiro-das-galaxias.png',
            'total_pages' => 250,
        ]);
        $book_03->categories()->attach($category_03);
        $book_03->categories()->attach($category_05);

        $book_04 = Book::factory()->create([
            'id' => 4,
            'name' => 'A revolução dos bichos',
            'author' => 'George Orwell',
            'summary' => 'Nec tempor nunc in egestas. Euismod nisi eleifend at et in sagittis. Penatibus id vestibulum imperdiet a at imperdiet lectus leo. Sit porta eget nec vitae sit vulputate eget',
            'cover_url' => 'images/books/a-revolucao-dos-bixos.png',
            'total_pages' => 350,
        ]);
        $book_04->categories()->attach($category_06);
        $book_04->categories()->attach($category_07);

        $book_05 = Book::factory()->create([
            'id' => 5,
            'name' => 'O fim da eternidade',
            'author' => 'Isaac Asimov',
            'summary' => 'Nec tempor nunc in egestas. Euismod nisi eleifend at et in sagittis. Penatibus id vestibulum imperdiet a at imperdiet lectus leo. Sit porta eget nec vitae sit vulputate eget',
            'cover_url' => 'images/books/o-fim-da-eternidade.png',
            'total_pages' => 165,
        ]);
        $book_05->categories()->attach($category_03);
        $book_05->categories()->attach($category_08);

        $book_06 = Book::factory()->create([
            'id' => 6,
            'name' => 'Entendendo Algoritmos',
            'author' => 'Aditya Y. Bhargava',
            'summary' => 'Nec tempor nunc in egestas. Euismod nisi eleifend at et in sagittis. Penatibus id vestibulum imperdiet a at imperdiet lectus leo. Sit porta eget nec vitae sit vulputate eget',
            'cover_url' => 'images/books/entendendo-algoritmos.png',
            'total_pages' => 165,
        ]);
        $book_06->categories()->attach($category_01);
        $book_06->categories()->attach($category_02);

        $book_07 = Book::factory()->create([
            'id' => 7,
            'name' => 'Código Limpo',
            'author' => 'Robert C. Martin',
            'summary' => 'Nec tempor nunc in egestas. Euismod nisi eleifend at et in sagittis. Penatibus id vestibulum imperdiet a at imperdiet lectus leo. Sit porta eget nec vitae sit vulputate eget',
            'cover_url' => 'images/books/codigo-limpo.png',
            'total_pages' => 365,
        ]);
        $book_07->categories()->attach($category_01);
        $book_07->categories()->attach($category_02);

        $book_08 = Book::factory()->create([
            'id' => 8,
            'name' => 'O poder do hábito',
            'author' => 'Charles Duhigg',
            'summary' => 'Nec tempor nunc in egestas. Euismod nisi eleifend at et in sagittis. Penatibus id vestibulum imperdiet a at imperdiet lectus leo. Sit porta eget nec vitae sit vulputate eget',
            'cover_url' => 'images/books/o-poder-do-habito.png',
            'total_pages' => 288,
        ]);
        $book_08->categories()->attach($category_02);
        $book_08->categories()->attach($category_10);

        $book_09 = Book::factory()->create([
            'id' => 9,
            'name' => 'Arquitetura limpa',
            'author' => 'Robert C. Martin',
            'summary' => 'Nec tempor nunc in egestas. Euismod nisi eleifend at et in sagittis. Penatibus id vestibulum imperdiet a at imperdiet lectus leo. Sit porta eget nec vitae sit vulputate eget',
            'cover_url' => 'images/books/arquitetura-limpa.png',
            'total_pages' => 288,
        ]);
        $book_09->categories()->attach($category_01);
        $book_09->categories()->attach($category_02);

        $book_10 = Book::factory()->create([
            'id' => 10,
            'name' => 'Histórias extraordinárias',
            'author' => 'Edgar Allan Poe',
            'summary' => 'Nec tempor nunc in egestas. Euismod nisi eleifend at et in sagittis. Penatibus id vestibulum imperdiet a at imperdiet lectus leo. Sit porta eget nec vitae sit vulputate eget',
            'cover_url' => 'images/books/historias-extraordinarias.png',
            'total_pages' => 332,
        ]);
        $book_10->categories()->attach($category_03);
        $book_10->categories()->attach($category_09);

        $book_11 = Book::factory()->create([
            'id' => 11,
            'name' => 'Refatoração',
            'author' => 'Martin Fowler',
            'summary' => 'Nec tempor nunc in egestas. Euismod nisi eleifend at et in sagittis. Penatibus id vestibulum imperdiet a at imperdiet lectus leo. Sit porta eget nec vitae sit vulputate eget',
            'cover_url' => 'images/books/refatoracao.png',
            'total_pages' => 332,
        ]);
        $book_11->categories()->attach($category_01);
        $book_11->categories()->attach($category_02);

        $book_12 = Book::factory()->create([
            'id' => 12,
            'name' => 'Domain-Driven Design',
            'author' => 'Eric Evans',
            'summary' => 'Nec tempor nunc in egestas. Euismod nisi eleifend at et in sagittis. Penatibus id vestibulum imperdiet a at imperdiet lectus leo. Sit porta eget nec vitae sit vulputate eget',
            'cover_url' => 'images/books/domain-driven-design.png',
            'total_pages' => 288,
        ]);
        $book_12->categories()->attach($category_01);
        $book_12->categories()->attach($category_11);

        $book_13 = Book::factory()->create([
            'id' => 13,
            'name' => 'Viagem ao Centro da Terra',
            'author' => 'Julio Verne',
            'summary' => 'Nec tempor nunc in egestas. Euismod nisi eleifend at et in sagittis. Penatibus id vestibulum imperdiet a at imperdiet lectus leo. Sit porta eget nec vitae sit vulputate eget',
            'cover_url' => 'images/books/viagem-ao-centro-da-terra.png',
            'total_pages' => 288,
        ]);
        $book_13->categories()->attach($category_03);
        $book_13->categories()->attach($category_08);

        $book_14 = Book::factory()->create([
            'id' => 14,
            'name' => 'Fragmentos do Horror',
            'author' => 'Junji Ito',
            'summary' => 'Nec tempor nunc in egestas. Euismod nisi eleifend at et in sagittis. Penatibus id vestibulum imperdiet a at imperdiet lectus leo. Sit porta eget nec vitae sit vulputate eget',
            'cover_url' => 'images/books/fragmentos-do-horror.png',
            'total_pages' => 144,
        ]);
        $book_14->categories()->attach($category_03);
        $book_14->categories()->attach($category_12);

        $book_15 = Book::factory()->create([
            'id' => 15,
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
                'rate' => 4,
                'description' => 'Nec tempor nunc in egestas. Euismod nisi eleifend at et in sagittis.',
                'book_id' => 2,
                'user_id' => 1,
            ],
            [
                'rate' => 4,
                'description' => 'Nec tempor nunc in egestas.',
                'book_id' => 3,
                'user_id' => 2,
            ],
            [
                'rate' => 5,
                'description' => 'Semper et sapien proin vitae nisi. Feugiat neque integer donec et aenean posuere amet ultrices.',
                'book_id' => 6,
                'user_id' => 3,
            ],
            [
                'rate' => 4,
                'description' => 'Nec tempor nunc in egestas.',
                'book_id' => 3,
                'user_id' => 2,
            ],
            [
                'rate' => 5,
                'description' => 'Semper et sapien proin vitae nisi. Feugiat neque integer donec et aenean posuere amet ultrices.',
                'book_id' => 6,
                'user_id' => 3,
            ],
            [
                'rate' => 4,
                'description' => 'Nec tempor nunc in egestas. Euismod nisi eleifend at et in sagittis.',
                'book_id' => 5,
                'user_id' => 1,
            ],
            [
                'rate' => 4,
                'description' => 'Nec tempor nunc in egestas.',
                'book_id' => 4,
                'user_id' => 2,
            ],
            [
                'rate' => 5,
                'description' => 'Semper et sapien proin vitae nisi. Feugiat neque integer donec et aenean posuere amet ultrices.',
                'book_id' => 2,
                'user_id' => 3,
            ],
            [
                'rate' => 4,
                'description' => 'Nec tempor nunc in egestas. Euismod nisi eleifend at et in sagittis.',
                'book_id' => 1,
                'user_id' => 1,
            ],
            [
                'rate' => 4,
                'description' => 'Nec tempor nunc in egestas.',
                'book_id' => 7,
                'user_id' => 2,
            ],
            [
                'rate' => 5,
                'description' => 'Semper et sapien proin vitae nisi. Feugiat neque integer donec et aenean posuere amet ultrices.',
                'book_id' => 8,
                'user_id' => 3,
            ],
            [
                'rate' => 4,
                'description' => 'Nec tempor nunc in egestas. Euismod nisi eleifend at et in sagittis.',
                'book_id' => 9,
                'user_id' => 1,
            ],
            [
                'rate' => 4,
                'description' => 'Nec tempor nunc in egestas.',
                'book_id' => 10,
                'user_id' => 2,
            ],
            [
                'rate' => 5,
                'description' => 'Semper et sapien proin vitae nisi. Feugiat neque integer donec et aenean posuere amet ultrices.',
                'book_id' => 11,
                'user_id' => 3,
            ],
            [
                'rate' => 4,
                'description' => 'Nec tempor nunc in egestas. Euismod nisi eleifend at et in sagittis.',
                'book_id' => 12,
                'user_id' => 1,
            ],
            [
                'rate' => 4,
                'description' => 'Nec tempor nunc in egestas.',
                'book_id' => 13,
                'user_id' => 2,
            ],
            [
                'rate' => 5,
                'description' => 'Semper et sapien proin vitae nisi. Feugiat neque integer donec et aenean posuere amet ultrices.',
                'book_id' => 14,
                'user_id' => 3,
            ],
            [
                'rate' => 4,
                'description' => 'Nec tempor nunc in egestas. Euismod nisi eleifend at et in sagittis.',
                'book_id' => 15,
                'user_id' => 1,
            ],
        ]);
    }
}
