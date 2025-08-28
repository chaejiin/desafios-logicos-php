# 📘 Guia de Estudos e Referência Rápida de PHP  

Manual resumido com os principais conceitos da linguagem **PHP** para consulta e estudo, baseado nas observações da UC3/SENAC (anotações pessoais + observações do professor).  

🔗 Para informações mais detalhadas, consulte sempre a documentação oficial do PHP:  
[Documentação do PHP](https://www.php.net/manual/pt_BR/)  

---

## ⚙️ Configurando o Ambiente de Desenvolvimento (XAMPP)  

Para executar e testar seus scripts PHP, você precisará de um ambiente de servidor.  

1. Inicialize o servidor **Apache** no painel de controle do XAMPP.  
2. Coloque a **pasta do seu projeto** dentro do diretório `htdocs` (geralmente em `C:/xampp/htdocs`).  
3. Acesse seu projeto pelo navegador:  

   ```
   http://127.0.0.1/nome-da-sua-pasta
   ```

   Exemplo: `http://127.0.0.1/meu-primeiro-projeto`  

💡 **Dica no VS Code**: Use `Alt + Z` para ativar a **quebra automática de linha** e melhorar a leitura do código.  

---

## 💬 Exibindo e Depurando Informações  

Saber exibir e inspecionar dados é fundamental para encontrar erros no código.  

### 🔹 O comando `echo`  
O `echo` é o comando mais básico para exibir informações no navegador.  
Ele pode imprimir **uma ou mais strings (textos)**.  

Exemplo:  
```php
echo "Olá, mundo!";
```

### 🔹 Inspecionando dados com `var_dump()`  
Enquanto `echo` apenas exibe valores, o `var_dump()` mostra **detalhes completos da variável**, incluindo:  
- Tipo (string, int, array, etc.)  
- Valor  
- Tamanho (quando aplicável)  

👉 Ele lembra o `console.log()` do JavaScript.  

Exemplo prático: inspecionando dados de formulários:  
```php
// Inspecionar dados enviados via POST
var_dump($_POST);

// Inspecionar dados enviados via GET
var_dump($_GET);
```

---

## ➗ Operadores Aritméticos  

Em PHP, os operadores aritméticos são usados para realizar cálculos matemáticos.  

| Exemplo   | Nome            | Resultado |
|-----------|-----------------|-----------|
| `+$a`     | Identidade      | Converte `$a` para número (int ou float). |
| `-$a`     | Negação         | Retorna o oposto de `$a`. |
| `$a + $b` | Adição          | Soma de `$a` e `$b`. |
| `$a - $b` | Subtração       | Diferença entre `$a` e `$b`. |
| `$a * $b` | Multiplicação   | Produto de `$a` e `$b`. |
| `$a / $b` | Divisão         | Quociente da divisão de `$a` por `$b`. |
| `$a % $b` | Módulo          | Resto da divisão de `$a` por `$b`. |
| `$a ** $b`| Exponenciação   | `$a` elevado à potência de `$b`. |

---

✍️ **Observação**: Esse material é apenas um resumo para consulta rápida.  
Para aprofundamento, utilize exemplos práticos e consulte a documentação oficial.  
