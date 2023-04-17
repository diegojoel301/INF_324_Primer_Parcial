namespace Ejercicio_7_inf_324_examen
{
    partial class Form1
    {
        /// <summary>
        /// Variable del diseñador requerida.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Limpiar los recursos que se estén utilizando.
        /// </summary>
        /// <param name="disposing">true si los recursos administrados se deben eliminar; false en caso contrario.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Código generado por el Diseñador de Windows Forms

        /// <summary>
        /// Método necesario para admitir el Diseñador. No se puede modificar
        /// el contenido del método con el editor de código.
        /// </summary>
        private void InitializeComponent()
        {
            this.dataGridView1 = new System.Windows.Forms.DataGridView();
            this.label1 = new System.Windows.Forms.Label();
            this.label2 = new System.Windows.Forms.Label();
            this.label3 = new System.Windows.Forms.Label();
            this.label4 = new System.Windows.Forms.Label();
            this.label5 = new System.Windows.Forms.Label();
            this.label6 = new System.Windows.Forms.Label();
            this.carnet_identidad = new System.Windows.Forms.TextBox();
            this.nombre_completo = new System.Windows.Forms.TextBox();
            this.fecha_nacimiento = new System.Windows.Forms.DateTimePicker();
            this.telefono = new System.Windows.Forms.TextBox();
            this.departamento = new System.Windows.Forms.ComboBox();
            this.insert_data = new System.Windows.Forms.Button();
            this.update_data = new System.Windows.Forms.Button();
            this.test = new System.Windows.Forms.Label();
            ((System.ComponentModel.ISupportInitialize)(this.dataGridView1)).BeginInit();
            this.SuspendLayout();
            // 
            // dataGridView1
            // 
            this.dataGridView1.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.AutoSize;
            this.dataGridView1.Location = new System.Drawing.Point(57, 324);
            this.dataGridView1.Name = "dataGridView1";
            this.dataGridView1.Size = new System.Drawing.Size(770, 187);
            this.dataGridView1.TabIndex = 0;
            this.dataGridView1.CellContentClick += new System.Windows.Forms.DataGridViewCellEventHandler(this.dataGridView1_CellContentClick);
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Font = new System.Drawing.Font("Microsoft Sans Serif", 25F);
            this.label1.Location = new System.Drawing.Point(132, 23);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(529, 39);
            this.label1.TabIndex = 1;
            this.label1.Text = "Ejercicio 7 INF 324 Primer Parcial";
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.Font = new System.Drawing.Font("Microsoft Sans Serif", 15F);
            this.label2.Location = new System.Drawing.Point(85, 92);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(37, 25);
            this.label2.TabIndex = 2;
            this.label2.Text = "Ci:";
            // 
            // label3
            // 
            this.label3.AutoSize = true;
            this.label3.Font = new System.Drawing.Font("Microsoft Sans Serif", 15F);
            this.label3.Location = new System.Drawing.Point(85, 136);
            this.label3.Name = "label3";
            this.label3.Size = new System.Drawing.Size(87, 25);
            this.label3.TabIndex = 3;
            this.label3.Text = "Nombre:";
            this.label3.Click += new System.EventHandler(this.label3_Click);
            // 
            // label4
            // 
            this.label4.AutoSize = true;
            this.label4.Font = new System.Drawing.Font("Microsoft Sans Serif", 15F);
            this.label4.Location = new System.Drawing.Point(85, 175);
            this.label4.Name = "label4";
            this.label4.Size = new System.Drawing.Size(175, 25);
            this.label4.TabIndex = 4;
            this.label4.Text = "Fecha Nacimiento:";
            // 
            // label5
            // 
            this.label5.AutoSize = true;
            this.label5.Font = new System.Drawing.Font("Microsoft Sans Serif", 15F);
            this.label5.Location = new System.Drawing.Point(85, 214);
            this.label5.Name = "label5";
            this.label5.Size = new System.Drawing.Size(89, 25);
            this.label5.TabIndex = 5;
            this.label5.Text = "Telefono";
            // 
            // label6
            // 
            this.label6.AutoSize = true;
            this.label6.Font = new System.Drawing.Font("Microsoft Sans Serif", 15F);
            this.label6.Location = new System.Drawing.Point(85, 254);
            this.label6.Name = "label6";
            this.label6.Size = new System.Drawing.Size(135, 25);
            this.label6.TabIndex = 6;
            this.label6.Text = "Departamento";
            // 
            // carnet_identidad
            // 
            this.carnet_identidad.Location = new System.Drawing.Point(280, 97);
            this.carnet_identidad.Name = "carnet_identidad";
            this.carnet_identidad.Size = new System.Drawing.Size(251, 20);
            this.carnet_identidad.TabIndex = 7;
            // 
            // nombre_completo
            // 
            this.nombre_completo.Location = new System.Drawing.Point(280, 142);
            this.nombre_completo.Name = "nombre_completo";
            this.nombre_completo.Size = new System.Drawing.Size(251, 20);
            this.nombre_completo.TabIndex = 8;
            // 
            // fecha_nacimiento
            // 
            this.fecha_nacimiento.Location = new System.Drawing.Point(280, 180);
            this.fecha_nacimiento.Name = "fecha_nacimiento";
            this.fecha_nacimiento.Size = new System.Drawing.Size(251, 20);
            this.fecha_nacimiento.TabIndex = 9;
            // 
            // telefono
            // 
            this.telefono.Location = new System.Drawing.Point(280, 220);
            this.telefono.Name = "telefono";
            this.telefono.Size = new System.Drawing.Size(251, 20);
            this.telefono.TabIndex = 10;
            // 
            // departamento
            // 
            this.departamento.FormattingEnabled = true;
            this.departamento.Location = new System.Drawing.Point(280, 258);
            this.departamento.Name = "departamento";
            this.departamento.Size = new System.Drawing.Size(251, 21);
            this.departamento.TabIndex = 11;
            // 
            // insert_data
            // 
            this.insert_data.Location = new System.Drawing.Point(739, 250);
            this.insert_data.Name = "insert_data";
            this.insert_data.Size = new System.Drawing.Size(75, 23);
            this.insert_data.TabIndex = 12;
            this.insert_data.Text = "Insertar";
            this.insert_data.UseVisualStyleBackColor = true;
            this.insert_data.Click += new System.EventHandler(this.insert_data_Click);
            // 
            // update_data
            // 
            this.update_data.Location = new System.Drawing.Point(688, 283);
            this.update_data.Name = "update_data";
            this.update_data.Size = new System.Drawing.Size(126, 23);
            this.update_data.TabIndex = 13;
            this.update_data.Text = "Actualizar Cambios";
            this.update_data.UseVisualStyleBackColor = true;
            // 
            // test
            // 
            this.test.AutoSize = true;
            this.test.Font = new System.Drawing.Font("Microsoft Sans Serif", 10F);
            this.test.Location = new System.Drawing.Point(277, 62);
            this.test.Name = "test";
            this.test.Size = new System.Drawing.Size(213, 17);
            this.test.TabIndex = 14;
            this.test.Text = "Univ. Diego Joel Condori Quispe";
            // 
            // Form1
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(885, 570);
            this.Controls.Add(this.test);
            this.Controls.Add(this.update_data);
            this.Controls.Add(this.insert_data);
            this.Controls.Add(this.departamento);
            this.Controls.Add(this.telefono);
            this.Controls.Add(this.fecha_nacimiento);
            this.Controls.Add(this.nombre_completo);
            this.Controls.Add(this.carnet_identidad);
            this.Controls.Add(this.label6);
            this.Controls.Add(this.label5);
            this.Controls.Add(this.label4);
            this.Controls.Add(this.label3);
            this.Controls.Add(this.label2);
            this.Controls.Add(this.label1);
            this.Controls.Add(this.dataGridView1);
            this.Name = "Form1";
            this.Text = "Form1";
            ((System.ComponentModel.ISupportInitialize)(this.dataGridView1)).EndInit();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.DataGridView dataGridView1;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.Label label3;
        private System.Windows.Forms.Label label4;
        private System.Windows.Forms.Label label5;
        private System.Windows.Forms.Label label6;
        private System.Windows.Forms.TextBox carnet_identidad;
        private System.Windows.Forms.TextBox nombre_completo;
        private System.Windows.Forms.DateTimePicker fecha_nacimiento;
        private System.Windows.Forms.TextBox telefono;
        private System.Windows.Forms.ComboBox departamento;
        private System.Windows.Forms.Button insert_data;
        private System.Windows.Forms.Button update_data;
        private System.Windows.Forms.Label test;
    }
}

