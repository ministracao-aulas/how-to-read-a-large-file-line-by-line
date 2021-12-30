## Lendo arquivos grandes linha a linha sem pesar na memória


## Testando os scripts

### Gerando o arquivo que será lido
Antes de testar os scripts que lêem o arquivo "grande" (inputfile.txt), é preciso antes de tudo, gerá-lo.
Para gerar esse arquivo, execute o script `generate-large-file.php`:

```sh
php generate-large-file.php
```

### Executando os scripts
Sugiro carregar o arquivo `php.ini` que está neste repositório para testar os resultados.

> DICA: para carregar um arquivo de configuração durante a execução de um script, use o o parâmetro `-c` antes do nome do arquivo. Exemplo:
>
> ```sh
> php -c php.ini your-file.php
> ```

Os scripts incorretos tem seu nome começado com **WRONG** os "corretos" começam com **right-way**.

----

## Explicação

Ao executar um script "WRONG", você receberá um erro semelhante a esse:

```log
Fatal error: Allowed memory size of 134217728 bytes exhausted (tried to allocate 138897120 bytes) in /tmp/large-file/WRONG-using-file_get_contents.php on line 2
```

O que alguns ~~go horsers~~ programadores fazem? Aumentam a memória limite do PHP `memory_limit = -1`, porém **VOCÊ NÃO DEVE FAZER ISSO!!!!!**

Aumentar limite de memória pode até fazer seu sistema **funcionar** porém não estará **correto**.

O que você precisa fazer é mudar seu código.

Nesse repositório mostro alguns exemplos de como fazer a leitura de um arquivo muito grande o maior causador do erro acima (mas não o único).

> Não são as únicas formas de fazer. São exemplos de uso.
