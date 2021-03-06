<?php

/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2015, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (http://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2015, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT MIT License
 * @link	http://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

$lang['email_must_be_array'] = 'O m�todo de valida��o de email deve ser passado um array.';
$lang['email_invalid_address'] = 'Endere�o de email inv�lido: <strong>%s</strong>';
$lang['email_attachment_missing'] = 'N�o � poss�vel localizar o seguinte arquivo em anexo: <strong>%s</strong>';
$lang['email_attachment_unreadable'] = 'N�o � poss�vel abrir o anexo: <strong>%s</strong>';
$lang['email_no_from'] = 'N�o � possivel enviar email sem email de origem.';
$lang['email_no_recipients'] = 'Voc� deve incluir os recipientes: To(para), Cc(c�pia), ou Bcc(c�pia oculta)';
$lang['email_send_failure_phpmail'] = 'N�o � poss�vel enviar email usando PHP mail().  Seu servidor talvez n�o esteja configurado para enviar email usando este m�todo.';
$lang['email_send_failure_sendmail'] = 'N�o � poss�vel enviar email usando PHP Sendmail.  Seu servidor talvez n�o esteja configurado para enviar email usando este m�todo.';
$lang['email_send_failure_smtp'] = 'N�o � poss�vel enviar email usando PHP SMTP.  Seu servidor talvez n�o esteja configurado para enviar email usando este m�todo.';
$lang['email_sent'] = 'Sua mensagem foi enviada com sucesso usando o seguinte protocolo: <strong>%s</strong>';
$lang['email_no_socket'] = 'N�o � poss�vel abrir um socket para o Sendmail. Por favor verifique as configura��es.';
$lang['email_no_hostname'] = 'Voc� n�o especificou um endere�o SMTP.';
$lang['email_smtp_error'] = 'Os seguintes erros SMTP ocorreram: <strong>%s</strong>';
$lang['email_no_smtp_unpw'] = 'Erro: Voc� deve atribuir um usu�rio e senha do SMTP.';
$lang['email_failed_smtp_login'] = 'Falha ao enviar comando AUTH LOGIN. Erro: <strong>%s</strong>';
$lang['email_smtp_auth_un'] = 'Falha ao autenticar usu�rio. Erro: <strong>%s</strong>';
$lang['email_smtp_auth_pw'] = 'Falha ao autenticar senha. Erro: <strong>%s</strong>';
$lang['email_smtp_data_failure'] = 'N�o foi poss�vel enviar dados: <strong>%s</strong>';
$lang['email_exit_status'] = 'C�digo de status de sa�da: <strong>%s</strong>';

/* End of file email_lang.php */
/* Location: ./application/language/portuguese-brazilian/email_lang.php */